@extends('layouts.tamplate', ['title' => 'Tugas Pendahuluan', 'tugas' => 'active'])
@section('content')
    <div class="row justify-content-center">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-11">
            <div class="container justify-content-center text-center">
                <h3>Tugas Pendahuluan 6</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-11">

            <h4>1. Jelaskan apa yang dimaksud dengan framework</h4>
            <span>Jawab : Framework adalah sebuah kerangka kerja yang digunakan untuk mengembangkan website.
                Framework ini diciptakan untuk membantu web developer dalam menulis baris kode. Dengan
                menggunakan framework penulisan kode akan jauh lebih mudah, cepat, dan terstruktur rapi.</span>
            <h4>
                2. Apa perbedaan framework dengan library
            </h4>
            <span>
                Jawab : Secara definisi library dapat diartikan sebagai kumpulan kode program yang telah di tulis
                oleh orang lain atau team tertentu, sehingga kita hanya perlu menggunakannya saja tanpa harus
                membuat dari awal. Sebuah library biasanya hanya berfokus pada satu bidang tugas tertentu saja,
                seperti menangani database atau URL saja. Sedangkan framework adalah kumpulan dari library-
                library yang kita butuhkan untuk membangun sebuah aplikasi dan aturan-aturan tentang bagaimana
                cara kita untuk mengintegrasikan library yang digunakan, agar dapat berjalan secara efisien.
                Penggunaan framework juga bertujuan agar orang lain mudah memahami aplikasi yang kita buat,
                karena mereka hanya perlu mempelajari framework yang kita gunakan.
            </span>
            <h4>3. Jelaskan keunggulan menggunakan Laravel framework</h4>
            <span>
                Jawab : <br>
                - website menjadi lebih scalable (mudah dikembangkan) .<br>
                - terdapat namespace dan tampilan yang membantu Anda untuk mengorganisir dan mengatur
                sumber daya website. <br>
                - proses pengembangan menjadi lebih cepat sehingga menghemat waktu karena Laravel dapat
                dikombinasikan dengan beberapa komponen dari framework lain untuk mengembangkan
                website. <br>
            </span>
            <h4>4. Jelaskan mengenai konsep MVC pada Laravel</h4>
            <span>
                Jawab : MVC adalah konsep arsitektur dalam pembangunan aplikasi berbasis web yang membagi
                aplikasi web menjadi 3 bagian besar. Yang mana setiap bagian memiliki tugas-tugas serta tanggung
                jawab masing-masing. Tiga bagian tersebut adalah: model, view dan controller.
            </span>
            <h4>
                5. Jelaskan perbedaan Laravel dengan CI (CodeIgniter)
            </h4>
            <span>
                Jawab : secara definisi Laravel merupakan open source PHP Framework, menggunakan MVC, yang mana
                framework ini termasuk powerfull dan mudah untuk dipelajari. Cocok untuk pengembang yang ingin
                membuat aplikasi web yang canggih dengan fitur yang elegan dan modern. Sedangkan CodeIgniter
                merupakan framework PHP yang juga open source. Framework ini dibuat untuk pengembang yang ingin
                membuat aplikasi web sederhana namun mempunyai fitur yang sangat lengkap dan elegan.kemudian
                secara programing paradigm Laravel adalah Object Oriented Event Driven Functional, sedangkan
                Component Oriented
            </span>
        </div>
    </div>
@endsection
