<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Funcionários - RH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col">
            <div class="h-16 flex items-center px-6 border-b border-gray-200">
                <div class="flex items-center gap-2 text-indigo-600 font-bold text-xl">
                    <i data-lucide="layers"></i>
                    <span>Deveras<span class="text-gray-900">RH</span></span>
                </div>
            </div>
            <nav class="flex-1 p-4 space-y-1">
                <a href="/" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i> Dashboard
                </a>
                <a href="funcionarios.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg bg-indigo-50 text-indigo-600">
                    <i data-lucide="users" class="w-5 h-5"></i> Funcionários
                </a>
                <a href="departamentos.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                    <i data-lucide="pie-chart" class="w-5 h-5"></i> Departamentos
                </a>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto">
            
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8">
                <h1 class="text-xl font-semibold text-gray-800">Colaboradores</h1>
                <button class="flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition shadow-sm">
                    <i data-lucide="user-plus" class="w-4 h-4"></i> Novo Funcionário
                </button>
            </header>

            <div class="p-8 max-w-7xl w-full mx-auto">
                
                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-200 bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    <th class="px-6 py-4">Nome completo</th>
                                    <th class="px-6 py-4">Departamento</th>
                                    <th class="px-6 py-4">Salário</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                
                                <tr class="hover:bg-gray-50/80 transition">
                                    <td class="px-6 py-4 flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-700 font-semibold flex items-center justify-center text-xs">
                                            CS
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900">Carlos Silva</div>
                                            <div class="text-xs text-gray-500">Desenvolvedor Backend</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-blue-50 text-blue-700">Tecnologia</span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900">R$ 6.500,00</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700">
                                            Ativo
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="p-1.5 text-gray-500 hover:text-indigo-600 hover:bg-gray-50 rounded" title="Editar"><i data-lucide="pencil" class="w-4 h-4"></i></button>
                                            <button class="p-1.5 text-gray-500 hover:text-red-600 hover:bg-gray-50 rounded" title="Excluir"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>