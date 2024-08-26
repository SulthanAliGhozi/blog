<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            
        //     Category::create([
        //         'name' => 'Tutorial',
        //         'slug' => 'tutorial-1',
        //     ]);

        //     Post::create(
        //         [
        //             'title' => 'DEFACE (sql)',
        //             'author_id' => 1,
        //             'category_id' => 1,
        //             'slug' => 'metode-deface-sql',
        //             'body' => 'Deface menggunakan metode SQL Injection adalah salah satu serangan siber yang memanfaatkan kelemahan dalam aplikasi web yang memungkinkan penyerang menyuntikkan kode SQL berbahaya ke dalam input pengguna. SQL Injection memungkinkan penyerang memanipulasi database di belakang sebuah situs web, sehingga memungkinkan mereka untuk mengubah, menghapus, atau bahkan mencuri data sensitif. Salah satu cara yang sering dilakukan oleh penyerang setelah berhasil melakukan SQL Injection adalah dengan melakukan deface, yaitu mengubah tampilan halaman web dengan konten yang tidak diinginkan.

        //                         Proses deface menggunakan SQL Injection umumnya dimulai dengan mencari titik masuk yang rentan terhadap serangan ini, seperti formulir login, kolom pencarian, atau parameter URL. Setelah menemukan titik yang rentan, penyerang akan menyusun query SQL yang jahat untuk memodifikasi database, misalnya dengan mengubah konten halaman utama atau mengganti logo situs dengan gambar yang tidak pantas. Ketika pengguna mengakses halaman yang telah disusupi, perubahan yang dilakukan oleh penyerang akan langsung terlihat.

        //                         Untuk mencegah serangan deface melalui SQL Injection, pengembang web perlu memperhatikan beberapa hal penting, seperti:

        //                         Validasi input: Selalu validasi semua input pengguna untuk memastikan bahwa tidak ada karakter khusus yang dapat digunakan untuk menyusun query SQL yang berbahaya.
        //                         Parameterize queries: Gunakan parameterize queries untuk memisahkan data pengguna dari query SQL, sehingga penyerang tidak dapat memanipulasi query secara langsung.
        //                         Gunakan ORM: ORM (Object-Relational Mapper) dapat membantu dalam mencegah kesalahan umum dalam penulisan query SQL dan mengurangi risiko terjadinya SQL Injection.
        //                         Perbarui aplikasi dan kerangka kerja: Selalu perbarui aplikasi dan kerangka kerja yang digunakan untuk memperbaiki kerentanan keamanan yang telah diketahui.
        //                         Dengan menerapkan langkah-langkah keamanan yang tepat, Anda dapat meminimalkan risiko serangan SQL Injection dan melindungi situs web Anda dari deface.',
        //         ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
