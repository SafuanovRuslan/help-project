<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; align-items: center">
                    <div>
                        <img src="/images/metodical.jpeg" style="width: 100%">
                    </div>
                    <div>
                        <h2 style="margin: 30px 0 20px; font-size: 2em; font-weight: 900; text-align: center">Для кого этот сайт?</h2>
                        <p style="width: 70%; min-width: 540px; text-align: center; margin-left: auto; margin-right: auto">
                            Портал «Воспитываем вместе» создан для сотрудничества родителей и педагогов,
                            воспитывающих и обучающих детей с нарушением слуха и других детей с ОВЗ.
                        </p>
                    </div>
                </div>

                <div class="p-6 text-gray-900">
                    <h2 style="margin: 30px 0 20px; font-size: 2em; font-weight: 900; text-align: center">Разделы с полезной и актуальной информацией</h2>
                    <div style="display: grid; grid-template-columns: 450px 450px; gap: 20px; justify-content: center">
                        <a class="part-hrefs" href="/obr" style="color:black; transition: .5s; background-color: white; border-radius: 20px; padding: 40px 20px; position: relative">
                            <img src="/images/icon-obr.png" style="position: absolute; top: 30px; left: 20px; width: 100px">
                            <h3 style="margin: 20px 0 15px; font-size: 1.5em; font-weight: 900; text-align: center">Образование</h3>
                        </a>
                        <a class="part-hrefs" href="/edu" style="color:black; transition: .5s; background-color: white; border-radius: 20px; padding: 40px 20px; position: relative;">
                            <img src="/images/icon-vosp.png" style="position: absolute; top: 30px; left: 20px; width: 100px">
                            <h3 style="margin: 20px 0 15px; font-size: 1.5em; font-weight: 900; text-align: center">Воспитание</h3>
                        </a>
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
