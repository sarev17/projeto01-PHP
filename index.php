<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - RH</title>
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
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg bg-indigo-50 text-indigo-600">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i> Dashboard
                </a>
                <a href="/funcionarios.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                    <i data-lucide="users" class="w-5 h-5"></i> Funcionários
                </a>
                <a href="/departamentos.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                    <i data-lucide="pie-chart" class="w-5 h-5"></i> Departamentos
                </a>
            </nav>
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center gap-3 p-2">
                    <div class="w-9 h-9 rounded-full bg-indigo-600 text-white flex items-center justify-center font-semibold text-sm">
                        AV
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-700">André Veras</p>
                        <p class="text-xs text-gray-500">Administrador</p>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto">
            
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8 z-10">
                <h1 class="text-xl font-semibold text-gray-800">Visão Geral do RH</h1>
                <div class="text-sm text-gray-500">
                    Segunda-feira, 25 de Maio de 2026
                </div>
            </header>

            <div class="p-8 max-w-7xl w-full mx-auto space-y-8">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Funcionários</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">5</h3> </div>
                        <div class="p-3 bg-blue-50 text-blue-600 rounded-lg">
                            <i data-lucide="users" class="w-6 h-6"></i>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Colaboradores Ativos</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">4</h3> </div>
                        <div class="p-3 bg-green-50 text-green-600 rounded-lg">
                            <i data-lucide="user-check" class="w-6 h-6"></i>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Folha Mensal</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">R$ 28.100,00</h3> </div>
                        <div class="p-3 bg-amber-50 text-amber-600 rounded-lg">
                            <i data-lucide="dollar-sign" class="w-6 h-6"></i>
                        </div>
                    </div>

                </div>

                <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between bg-gray-50/50">
                        <h2 class="font-semibold text-gray-800">Listagem de Colaboradores</h2>
                        <span class="text-xs font-medium px-2.5 py-1 bg-indigo-50 text-indigo-700 rounded-full">Dados Dinâmicos</span>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-200 bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    <th class="px-6 py-4">Funcionário</th>
                                    <th class="px-6 py-4">Departamento</th>
                                    <th class="px-6 py-4">Salário</th>
                                    <th class="px-6 py-4">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                
                                <tr class="hover:bg-gray-50/80 transition">
                                    <td class="px-6 py-4">
                                        <div class="font-medium text-gray-900">Carlos Silva</div>
                                        <div class="text-xs text-gray-500">Desenvolvedor Backend</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                                            Tecnologia
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-700">R$ 6.500,00</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-green-50 text-green-700">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span> Ativo
                                        </span>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50/80 transition">
                                    <td class="px-6 py-4">
                                        <div class="font-medium text-gray-900">Ana Souza</div>
                                        <div class="text-xs text-gray-500">UI/UX Designer</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                                            Marketing
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-700">R$ 4.200,00</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-medium bg-red-50 text-red-700">
                                            <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span> Inativo
                                        </span>
                                    </td>
                                </tr>

                                </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>