<?php 
# Incluir el head de manera generica
include_once __DIR__ . './../app/views/utils/head.php';
?>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">

    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">

        <?= include_once __DIR__ . './../app/views/utils/header.php'  ?> 




        <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
            <!-- Hero Section: Featured News -->


            <section class="mb-12">
                <div class="relative h-[500px] w-full overflow-hidden rounded-xl group">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                        data-alt="Modern university campus building at sunset with students walking"
                        style="background-image: linear-gradient(to top, rgba(16, 22, 34, 0.9) 0%, rgba(16, 22, 34, 0.2) 60%, rgba(16, 22, 34, 0) 100%), url('https://drive.google.com/uc?export=view&id=1NfXxzxieeUQYkDfVxHQNvTcj1WyVg1YS');">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full md:w-2/3">
                        <span
                            class="inline-block px-3 py-1 bg-accent-red text-white text-xs font-bold rounded-full mb-4 uppercase tracking-widest">Destacado</span>
                        <h2 class="text-3xl md:text-5xl font-black text-white leading-tight mb-4">
                            CREE Inaugura Nuevo Pabellón de Tecnología de Vanguardia
                        </h2>

                        <p class="text-slate-200 text-lg mb-6 line-clamp-2">
                            <!-- Texto de imagen -->
                            Con una inversión histórica, el Centro Regional de Educación fortalece su compromiso con la
                            excelencia académica digital integrando laboratorios de robótica y IA.
                        </p>

                        <button
                            class="px-8 py-3 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-all flex items-center gap-2">
                            Leer noticia completa
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </section>




            <div class="flex flex-col lg:flex-row gap-12">
                <!-- News Grid Section -->
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-bold flex items-center gap-2">
                            <span class="w-2 h-8 bg-accent-red rounded-full"></span>
                            Últimas Noticias
                        </h3>
                        <a class="text-primary text-sm font-bold flex items-center gap-1 hover:underline" href="#">
                            Ver todo
                            <span class="material-symbols-outlined text-sm">open_in_new</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                        


                        <article
                            class="flex flex-col bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                            <div class="h-48 overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    data-alt="Group of diverse students working together in a library"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5sP0gEgL83Fq2rHrv27k70FaCrG0azDCSiN_KvD1SE6tY2Sul-Q9mWBmnLjyqt2UCBvP5nfeFIqZQ8Q4W_WED2cDWhtDdcK8EvdYawKfvPnLayG1vxYq6X2HZOkrE2mivbVBYHuW7ZooCze7CDkbXWSUKdPOVM2jZCaMB0DZbL4bbWEgoAMChPF_Mih_NtEOTD6Vd9dJrY2WO1HLQfqSoWRJOgwlAzhktAchVM0qN24W85WIUWMFkSrnRqMQBFSzHYiBC4HBGe-NO" />
                            </div>
                            <div class="p-5 flex flex-col flex-grow">
                                <span class="text-accent-red text-[10px] font-bold uppercase mb-2">Académico</span>
                                <h4
                                    class="text-lg font-bold leading-snug mb-3 group-hover:text-primary transition-colors">
                                    Convocatoria abierta para las Olimpiadas Matemáticas 2024</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm mb-4 line-clamp-3">Inscripciones
                                    abiertas para todos los niveles. Demuestra tus habilidades en el certamen nacional
                                    más prestigioso.</p>
                                <div
                                    class="mt-auto pt-4 border-t border-slate-50 dark:border-slate-800 flex items-center justify-between text-xs text-slate-400">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">calendar_today</span> 12 May,
                                        2024</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">visibility</span> 1.2k</span>
                                </div>
                            </div>
                        </article>

                        <article
                            class="flex flex-col bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                            <div class="h-48 overflow-hidden">
                                <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                    data-alt="Group of diverse students working together in a library"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5sP0gEgL83Fq2rHrv27k70FaCrG0azDCSiN_KvD1SE6tY2Sul-Q9mWBmnLjyqt2UCBvP5nfeFIqZQ8Q4W_WED2cDWhtDdcK8EvdYawKfvPnLayG1vxYq6X2HZOkrE2mivbVBYHuW7ZooCze7CDkbXWSUKdPOVM2jZCaMB0DZbL4bbWEgoAMChPF_Mih_NtEOTD6Vd9dJrY2WO1HLQfqSoWRJOgwlAzhktAchVM0qN24W85WIUWMFkSrnRqMQBFSzHYiBC4HBGe-NO" />
                            </div>
                            <div class="p-5 flex flex-col flex-grow">
                                <span class="text-accent-red text-[10px] font-bold uppercase mb-2">Polemica</span>
                                <h4
                                    class="text-lg font-bold leading-snug mb-3 group-hover:text-primary transition-colors">
                                    No me pagan lo suficiente 2024</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm mb-4 line-clamp-3">No me pagan lo sufiente como para estresarme </p>
                                <div
                                    class="mt-auto pt-4 border-t border-slate-50 dark:border-slate-800 flex items-center justify-between text-xs text-slate-400">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">calendar_today</span> 12 May,
                                        2024</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-xs">visibility</span> 1.2k</span>
                                </div>
                            </div>
                        </article>



                        <!-- Categories Sidebar -->
                        <aside class="w-full lg:w-80 shrink-0">
                            <div
                                class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-100 dark:border-slate-800 mb-8 sticky top-24">
                                <h4 class="text-sm font-black uppercase tracking-widest text-slate-400 mb-6">Categorías
                                </h4>
                                <nav class="flex flex-col gap-2">
                                    <a class="flex items-center justify-between px-4 py-3 rounded-lg bg-primary/5 text-primary font-bold group"
                                        href="#">
                                        <span class="flex items-center gap-3">
                                            <span class="material-symbols-outlined text-xl">menu_book</span>
                                            Académico
                                        </span>
                                        <span class="text-xs bg-primary/20 px-2 py-0.5 rounded-full">24</span>
                                    </a>

                            </div>
                        </aside>
                    </div>




        </main>



        <!-- Footer Section -->
        <?= include_once __DIR__ . './../app/views/utils/footer.php'?> 
    </div>
</body>

</html>