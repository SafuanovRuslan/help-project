<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: center">
                    <div>
                        <img src="/images/specialists.jpeg" style="width: 100%">
                    </div>
                    <div>
                        <h2 style="margin: 30px 0 20px; font-size: 2em; font-weight: 300; text-align: left">Специалисты – ваши верные помощники на пути к успешной адаптации в мире слышащих!</h2>
                        <h2 style="margin: 30px 0 20px; font-size: 2em; font-weight: 900; text-align: left">Свяжитесь с нами!</h2>
                    </div>
                </div>

                <div class="p-6 text-gray-900" style="padding-left: 0; padding-right: 0">
                    <div>
                        <?php $users = \App\Models\User::query()->where('type', '=', 1)->get(); ?>
                        <?php foreach ($users as $user): ?>
                            <div style="background-color: white; border-radius: 20px; padding: 40px 20px; position: relative; margin-bottom: 20px">
                                <h3 style="font-size: 1.2em; margin-bottom: 10px;"><?= $user->name ?></h3>
                                <p style="margin-bottom: 10px;">Email: <i><?= $user->email ?></i></p>
                                <p style="color: #777777">Специалист со стажем</p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .part-hrefs:hover {
            scale: 1.05;
        }
    </style>
</x-app-layout>
