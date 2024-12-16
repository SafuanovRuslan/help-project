<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="p-6 text-gray-900" style="padding-left: 0; padding-right: 0">
                    <?php
                        $comments = \App\Models\Comment::query()->where('subject_id', '=', $id)->get();
                        $user = \Illuminate\Support\Facades\Auth::user();
                        $subject = \App\Models\Subject::query()->where('id', '=', $id)->first();
                    ?>


                    <h2 style="margin: 30px 0 20px; font-size: 1.5em; font-weight: 900;">{!! $subject->title !!}</h2>

                    <div>
                        <?php foreach ($comments as $comment): ?>
                            <div style="background-color: white; border-radius: 6px; padding: 20px; margin-bottom: 12px">
                                <p><b>{!! $comment->name !!}</b></p>
                                <p>{!! $comment->text !!}</p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if($user): ?>
                        <form method="POST" action="/comment">
                            @csrf
                            <input type="hidden" name="subject_id" value="{{ $id }}">
                            <input type="hidden" name="name" value="{{ $user->name }}">
                            <div class="mt-4">
                                <textarea id="text" class="block mt-1 w-full" type="text" name="text" placeholder="Комментарий" style="border: 1px solid #e5e7eb; border-radius: .375rem"></textarea>
                                <x-primary-button class="ms-4" style="margin-left: 0!important; margin-top: 12px">
                                    {{ __('Добавить') }}
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
