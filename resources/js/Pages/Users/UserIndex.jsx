import PrimaryButton from "@/Components/Button/PrimaryButton";
import SuccessButton from "@/Components/Button/SuccessButton";
import Pagination from "@/Components/Pagination";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";

export default function UserIndex({ auth, users }) {
    return(
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Usuários</h2>}
        >
            <Head title="Usuário"/>

            <div className="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="overflow-hidden bg-white shadow-lg sm:rounded-lg dark:bg-gray-800">
                    <div className="flex justify-between items-center m-4">
                        <h3 className="text-lg dark:text-gray-200">Listar</h3>
                        <div className="flex space-x-4">
                            <SuccessButton>
                                Cadastrar
                            </SuccessButton>
                        </div>
                    </div>

                    <table className="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead className="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <td className="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-200 tracking-wider">ID</td>
                                <td className="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-200 tracking-wider">Nome</td>
                                <td className="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-200 tracking-wider">E-mail</td>
                                <td className="px-6 py-3 text-center text-sm font-medium text-gray-500 dark:text-gray-200 tracking-wider">Ações</td>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            {users.data.map((user) => (
                                <tr key={user.id}>
                                    <td className="px-6 py-2 text-sm text-gray-500 tracking-wider">
                                        {user.id}
                                    </td>
                                    <td className="px-6 py-2 text-sm text-gray-500 tracking-wider">
                                        {user.name}
                                    </td>
                                    <td className="px-6 py-2 text-sm text-gray-500 tracking-wider">
                                        {user.email}
                                    </td>
                                    <td className="px-6 py-2 text-sm text-gray-500 tracking-wider">
                                        <Link href={route('users.show', {id: user.id})}>
                                        <PrimaryButton className="ms-1">
                                            Visualizar
                                        </PrimaryButton>
                                        </Link>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>

                    {/* Paginação */}
                    <Pagination links={users.links} currentPage={users.current_page}/>
                </div>
            </div>

        </AuthenticatedLayout>
    )
}