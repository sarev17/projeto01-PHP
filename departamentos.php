<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos - RH</title>
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
                <a href="index.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i> Dashboard
                </a>
                <a href="funcionarios.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition">
                    <i data-lucide="users" class="w-5 h-5"></i> Funcionários
                </a>
                <a href="departamentos.php" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg bg-indigo-50 text-indigo-600">
                    <i data-lucide="pie-chart" class="w-5 h-5"></i> Departamentos
                </a>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto">
            
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-8">
                <h1 class="text-xl font-semibold text-gray-800">Departamentos da Empresa</h1>
            </header>

            <div class="p-8 max-w-7xl w-full mx-auto">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 flex flex-col justify-between h-48">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Tecnologia</h3>
                                <p class="text-sm text-gray-500 mt-1">2 Colaboradores</p> </div>
                            <div class="p-2.5 bg-blue-50 text-blue-600 rounded-lg">
                                <i data-lucide="code" class="w-5 h-5"></i>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-100 pt-4 flex justify-between items-center text-sm">
                            <span class="text-gray-500">Custo Mensal:</span>
                            <span class="font-semibold text-gray-900">R$ 15.000,00</span> </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>