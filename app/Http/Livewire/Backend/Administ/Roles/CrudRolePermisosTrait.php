<?php

namespace App\Http\Livewire\Backend\Administ\Roles;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Trait CrudRolePermisosTrait
 *
 * Proporciona funcionalidad para realizar operaciones CRUD relacionadas con la asignación de permisos a un Role.
 */
trait CrudRolePermisosTrait
{
    /**
     * Asigna los permisos especificados a un Role.
     *
     * @param int $roleId ID del Role al que se asignarán los permisos.
     * @param array $permisos Array de permisos a asignar.
     * @return void
     */
    public function asignarPermisos($roleId, $permisos)
    {
        $role = Role::findOrFail($roleId); // Busca el Role por su ID

        if ($role) {
            $role->syncPermissions($permisos); // Asigna los permisos al Role
            session()->flash('message', 'Permisos asignados con éxito.'); // Muestra un mensaje de éxito
        }
    }

    /**
     * Desasigna todos los permisos asignados a un Role.
     *
     * @param int $roleId ID del Role del que se desasignarán los permisos.
     * @return void
     */
    public function desasignarPermisos($roleId)
    {
        $role = Role::findOrFail($roleId); // Busca el Role por su ID

        if ($role) {
            $role->revokePermissionTo(Permission::all()); // Desasigna todos los permisos al Role
            session()->flash('message', 'Permisos desasignados con éxito.'); // Muestra un mensaje de éxito
        }
    }

    /**
     * Obtiene los permisos asignados al rol actualmente seleccionado.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|array
     */
    public function obtenerPermisosAsignados()
    {
        if ($this->modeloid > 0) {
            // Busca el Role por su ID
            $permissions = Role::
                // Obtiene los permisos asociados al Role con los nombres de los roles y permisos relacionados
                join('role_has_permissions', 'roles.id', '=', 'role_has_permissions.role_id')
                ->join('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                // Selecciona los campos deseados: el ID del rol, el ID y el nombre del permiso, y el nombre del rol
                ->select('roles.id as role', 'permissions.id', 'permissions.name')
                // Aplica el filtro "like" al nombre de los permisos
                ->where('permissions.name', 'like', '%' . $this->search . '%')
                ->where('roles.id', $this->modeloid)
                // Obtiene los permisos asignados al Role con paginación (10 elementos por página)
                ->paginate(5);


            return [$permissions, $this->modeloid]; // Devuelve la colección de permisos con paginación
        }

        return []; // Devuelve un arreglo vacío si no se encuentra el rol o no hay un ID de rol válido
    }




    /**
     * Carga los permisos no asignados a un rol.
     *
     * @param int $roleId El ID del rol.
     * @return \Illuminate\Database\Eloquent\Collection|Permission[] Los permisos no asignados al rol.
     */
    public function cargarPermisosNoAsignados()
    {
        $role = Role::findOrFail($this->modeloid); // Busca el Role por su ID

        if ($role) {
            $permisosAsignados = $role->permissions()->pluck('name')->all(); // Obtiene los nombres de los permisos asignados al Role
            $permisosNoAsignados = Permission::whereNotIn('name', $permisosAsignados)->get(); // Obtiene los permisos que no han sido asignados al Role

            return $permisosNoAsignados;
        }

        return [];
    }

    /**
     * Elimina un permiso del Role.
     *
     * @param int $permisoId El ID del permiso a eliminar.
     */
    public function eliminarPermiso($permisoId)
    {
        // Busca el Role por su ID
        $role = Role::findOrFail($this->modeloid);

        // Verifica si el Role existe
        if ($role) {
            // Busca el permiso por su ID
            $permiso = Permission::findOrFail($permisoId);

            // Verifica si el permiso existe
            if ($permiso) {
                // Revoca el permiso del Role
                $role->revokePermissionTo($permiso);
                session()->flash('message', 'Permiso eliminado con éxito.'); // Muestra un mensaje de éxito
            }
        }
    }

    /**
     * Agrega un permiso al Role.
     *
     * @param int $permisoId El ID del permiso a agregar.
     */
    public function agregarPermiso($permisoId)
    {
        // Busca el Role por su ID
        $role = Role::findOrFail($this->modeloid);

        // Verifica si el Role existe
        if ($role) {
            // Busca el permiso por su ID
            $permiso = Permission::findOrFail($permisoId);

            // Verifica si el permiso existe
            if ($permiso) {
                // Asigna el permiso al Role
                $role->givePermissionTo($permiso);
                session()->flash('message', 'Permiso agregado con éxito.'); // Muestra un mensaje de éxito
            }
        }
    }
}
