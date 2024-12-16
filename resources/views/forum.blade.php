<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: center">
                    <div style="text-align: center">
                        <img src="/images/forum.png" style="width: 70%; margin: 0 auto">
                    </div>
                    <div>
                        <h2 style="margin: 30px 0 20px; font-size: 1.5em; font-weight: 900;">Форум – место объединения и общения специалистов и родителей.</h2>
                        <p style="width: 70%; min-width: 540px; font-size: 1.5em;">
                            Задавайте вопросы, общайтесь и ищите единомышленников!
                        </p>
                    </div>

                </div>

                <div class="p-6 text-gray-900" style="padding-left: 0; padding-right: 0">
                    <h2 style="margin: 30px 0 20px; font-size: 1.5em; font-weight: 900; text-align: center">Темы:</h2>

                    <?php
                        $subjects = \App\Models\Subject::query()->get();
                        $user = \Illuminate\Support\Facades\Auth::user();
                    ?>

                    <ul>
                        <?php foreach ($subjects as $subject): ?>
                            <li style="background-color: white; border-radius: 6px; margin-bottom: 12px">
                                <a style="display: inline-block; width: 100%; height: 100%; padding: 20px;" href="/forum/{{ $subject->id }}">
                                    <b>{!! $subject->title !!}</b>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <?php if($user): ?>
                        <form method="POST" action="/forum">
                            @csrf
                            <div class="mt-4">
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" placeholder="Новая тема" required autofocus autocomplete="name" />
                                <x-primary-button class="ms-4" style="margin-left: 0!important; margin-top: 12px">
                                    {{ __('Создать') }}
                                </x-primary-button>
                            </div>
                        </form>
                    <?php endif; ?>
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
