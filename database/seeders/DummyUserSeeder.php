<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'username' => 'Admin1',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Fakhri',
                'username' => 'G1A021050',
                'password' => bcrypt('kudalaut123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Yuli Amaliyah, S.Pd., M.Pd.',
                'username' => 'yuliamaliyah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Nani Yuliantini, M.Pd.',
                'username' => 'naniyuliantini@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Herman, M.Pd.',
                'username' => 'herman@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Hasnawati, M.Si.',
                'username' => 'hasnawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dalifa, M.Pd.',
                'username' => 'dalifa@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dwi Anggraini, S.Sn.M.Pd.',
                'username' => 'dwianggraini@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Feri Noperman, M.Pd.',
                'username' => 'ferinoperman@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Neza Agusdianita, M.Pd.',
                'username' => 'nezaagusdianita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Pebrian Tarmizi, S.Pd., M.Pd.',
                'username' => 'pebriantarmizi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Panut Setiono, S.Pd., M.Pd.',
                'username' => 'panutsetiono@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Irfan Supriatna, S.Pd., M.Pd.',
                'username' => 'irfansupriatna@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Nady Febri Ariffiando, S.Pd., M.Pd.',
                'username' => 'nadyfebriariffiando@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Atika Susanti, S.Pd., M.Pd.',
                'username' => 'atikasusanti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Ike Kurniawati, M.Pd.',
                'username' => 'ikekurniawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Yusnia, M.Pd.',
                'username' => 'yusnia@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],   
            [
                'name' => 'Prof. Dr. Riyanto, M.Pd.',
                'username' => 'riyanto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Wembrayarli, S.Pd.M.Sn.',
                'username' => 'wembrayarli@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Didik Suryadi, M.A.',
                'username' => 'didiksuryadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Delrefi, M.Pd.',
                'username' => 'delrefi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Indrawati, M.Pd.TP',
                'username' => 'indrawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Mona Ardina, S.Psi. M.Si.',
                'username' => 'monaardina@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Melia Eka Daryati, S.Pd., M.Pd.',
                'username' => 'meliaekadaryati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Zahratul Qalbi, S.Pd., M.Pd.',
                'username' => 'zahratulqalbi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Septi Fitriana, M.Pd.',
                'username' => 'septifitriana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dwi Lyna Sari, M.Pd.',
                'username' => 'dwilynasari@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Nesna Agustriana, M.Pd',
                'username' => 'nesnaagustriana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Yarmani, M.Kes.',
                'username' => 'yarmani@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Syafrial, M.Kes.',
                'username' => 'syafrial@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Tono Sugihartono, M.Pd.',
                'username' => 'tonosugihartono@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Dian Pujianto, S.Pd. Jas., M.Or.',
                'username' => 'dianpujianto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Arwin, M.Pd.',
                'username' => 'arwin@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Ari Sutisyana, M.Pd.',
                'username' => 'arisutisyana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Yahya Eko Nopiyanto, S.Pd., M.Pd.',
                'username' => 'yahyaekonopiyanto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Septian Raibowo, S.Pd., M.Pd.',
                'username' => 'septianraibowo@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Andika Prabowo, M.Pd.',
                'username' => 'andikaprabowo@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Oddie Barnanda Rizky, M.Pd.',
                'username' => 'oddiebarnandarizky@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Andes Permadi, M.Pd.',
                'username' => 'andespermadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Bogy Restu Ilahi, M.Pd.',
                'username' => 'bogyrestuilahi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Defliyanto, M.Pd.',
                'username' => 'defliyanto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Rufran Zulkarnain, M.Pd.',
                'username' => 'rufranzulkarnain@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Ilham Abdullah, M.Pd.',
                'username' => 'ilhamabdullah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Sofino, M.Pd.',
                'username' => 'sofino@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Citra Dwi Palenti, S.Pd., M.Pd.',
                'username' => 'citradwipalenti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Ririn Gusti, M.Pd.I',
                'username' => 'riringusti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Bayu Pradikto, S.Pd., M.Pd.',
                'username' => 'bayupradikto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Lenni Mantili Hutauruk, M.Ed.',
                'username' => 'lennihutauruk@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dwi Ismawati, M.Pd.',
                'username' => 'dwiismawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Ari Putra, S.Pd., M.Pd.',
                'username' => 'ariputra@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Sri Saparahayuningsih, M.Pd.',
                'username' => 'srisaparahayuningsih@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Syahriman, M.Pd.',
                'username' => 'syahriman@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Rita Sinthia, S.Psi., M.Si.',
                'username' => 'ritasinthia@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Yessy Elita, S.Psi. M.A.',
                'username' => 'yessyelita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Anni Suprapti, M.Psi.',
                'username' => 'annisuprapti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Vira Avriyati, M.Pd., Kons.',
                'username' => 'viraavriyati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Arsyadani Mishbahuddin, M.Pd.I.',
                'username' => 'arsyadanimishbahuddin@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Anna Ayu Herawati, S.Pd., M.Pd.',
                'username' => 'annaayuherawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Adif Jawadi Saputra, M.Pd.',
                'username' => 'adifjawadisaputra@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Mayang T. Afriwilda, M.Pd.',
                'username' => 'mayangafriwilda@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Rosane Medriati, M.Pd.',
                'username' => 'rosanemedriati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Andik Purwanto, S.Pd, M.Si.',
                'username' => 'andikpurwanto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Eko Risdianto, S.Si, M.Cs.',
                'username' => 'ekorisdianto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dedy Hamdani, S.Si, M.Si.',
                'username' => 'dedyhamdani@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Iwan Setiawan, S.Si, M.Sc.',
                'username' => 'iwansetiawan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Desy Henisa Putri, S.Pd, M.Si.',
                'username' => 'desyhenisaputri@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Ahmad Syarkowi, S.Pd., M.Pd.',
                'username' => 'ahmadsyarkowi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Bodi Gunawan, M.Si.',
                'username' => 'bodigunawan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Wiwit, S.Si, M.Si., Ph.D',
                'username' => 'wiwit@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Nurhamidah, M.Si.',
                'username' => 'nurhamidah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr.nat.techn. I Nyoman Candra, S.Si.,M.Sc.',
                'username' => 'inyomancandra@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Dewi Handayani, S.Pd., M.Si.',
                'username' => 'dewihandayani@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Sura Menda Ginting, S.Si., M.Sc., Ph.D.',
                'username' => 'suramendaginting@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Elvinawati, S.Si., M.Si.',
                'username' => 'elvinawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Salastri Rohiat, S.Pd., M.Pd.',
                'username' => 'salastrirohiat@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Febrian Solikhin, S.Pd., M.Pd.',
                'username' => 'febriansolikhin@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Hermansyah Amir, M.Pd',
                'username' => 'hermansyahamir@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Nadia Amida, S.Pd., M.Pd.',
                'username' => 'nadiaamida@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Rina Elvia, S.Si, M.Si',
                'username' => 'rinaelvia@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Sri Irawati, M.Pd.',
                'username' => 'sriirawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Kasrina, M.Si',
                'username' => 'kasrina@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Yennita, M.Si.',
                'username' => 'yennita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Drs. Abas, M.Pd.',
                'username' => 'abas@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Abdul Rahman, S.Si., M.Si., Ph.D',
                'username' => 'abdulrahman@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Syarif Hidayat, M.Pd.',
                'username' => 'syarifhidayat@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dewi Jumiarni, S.Si, M.Si.',
                'username' => 'dewijumiarni@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Alif Yanuar Zukmadini, S.Pd., M.Pd.',
                'username' => 'alifyanuarzukmadini@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Neni Murniati, S.Pd., M.Pd.',
                'username' => 'nenimurniati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Ahmad Saddam Husein, S.Pd., M.Sc.',
                'username' => 'ahmadsaddamhusein@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Rendi Zulni Eka Putri, M.Pd.Si',
                'username' => 'rendizulniekaputri@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Nirwana, M.Pd.',
                'username' => 'nirwana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Ariefa Primairyani, M.Si.',
                'username' => 'ariefaprimairyani@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Bhakti Karyadi, M.Pd.',
                'username' => 'bhaktikaryadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Indra Sakti Lubis, M.Pd.',
                'username' => 'indrasaktilubis@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Sutarno, S.Si., M.Pd.',
                'username' => 'sutarno@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Mellyta Uliyandari, S.Pd., M.Pd.Si.',
                'username' => 'mellytauliyandari@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Emilia Candrawati, S.Pd., M.Pd.',
                'username' => 'emiliacandrawati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Aprina Defianti, S.Pd., M.Pd.',
                'username' => 'aprinadefianti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Syaiful Rochman, S.Pd., M.Pd.',
                'username' => 'syaifulrochman@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Deni Parlindungan, M.Pd.Si',
                'username' => 'deniparlindungan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Supadi, M.Hum.',
                'username' => 'supadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Ngudining Rahayu, M.Hum.',
                'username' => 'ngudiningrahayu@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Emi Agustina, M.Hum.',
                'username' => 'emiagustina@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Yayah Chanafiah, M.Hum.',
                'username' => 'yayahchanafiah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Amrizal, M.Hum.',
                'username' => 'amrizal@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Padi Utomo, M.Pd.',
                'username' => 'padiutomo@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Agus Joko Purwadi, M.Pd.',
                'username' => 'agusjokopurwadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Amril Canrhas, M.S.',
                'username' => 'amrilcanrhas@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Bustanuddin Lubis, S.S.M.A.',
                'username' => 'bustanuddinlubis@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Catur Wulandari, S.Pd., M.Pd.',
                'username' => 'caturwulandari@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Nafri Yanti, S.Pd., M.Pd.',
                'username' => 'nafriyanti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Rio Kurniawan, S.Pd., M.Pd.',
                'username' => 'riokurniawan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Fina Hiasa, S.Pd., M.A.',
                'username' => 'finahiasa@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Wisman, S.Pd., M.Pd.',
                'username' => 'wisman@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Meli Afrodita, M.Pd.',
                'username' => 'meliafrodita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Lazfihma, S.S., M.Pd.',
                'username' => 'lazfihma@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Fitra Youpika, S.Pd.,M.Pd',
                'username' => 'fitrayoupika@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Mulyadi, Dip. TESL., M.A.',
                'username' => 'mulyadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Mukhrizal, M.App.Ling.',
                'username' => 'mukhrizal@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Elfrida, M.Pd.',
                'username' => 'elfrida@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Kasmaini, S.S., M.Pd.',
                'username' => 'kasmaini@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Mei Hardiah, S.S., M.A.',
                'username' => 'meihardiah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Dra. Erni Sukesi, M.Pd.',
                'username' => 'ernisukesi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Dedi Sofyan, M.Hum.',
                'username' => 'dedisofyan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Zahrida, S.S., M.Hum.',
                'username' => 'zahrida@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Indah Damayanti, S.S., M.R.S.',
                'username' => 'indahdamayanti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Eka Novita, S.Pd., M.A.',
                'username' => 'ekanovita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Gita Mutiara Hati, M.Pd.',
                'username' => 'gitamutiarahati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Ildi Kurniawan, S.Pd., M.Pd.',
                'username' => 'ildikurniawan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Sufiyandi, S.Pd., M.Pd.',
                'username' => 'sufiyandi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Fernandita Gusweni Jayanti, M.Pd.',
                'username' => 'fernanditajayanti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Azhar Aziz Lubis, M.Pd',
                'username' => 'azharlubis@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Muhammad Fadhli, S.Pd., M.Pd.',
                'username' => 'muhammadfadhli@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Eko Saputra, S.Pd., M.A',
                'username' => 'ekosaputra@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dwi Bayu Saputra, M.Pd.',
                'username' => 'dwibayusaputra@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Adelia Puspa, M.Pd.',
                'username' => 'adeliapuspa@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Lia Haryana, S.Pd., M.Pd.',
                'username' => 'liaharyana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Anggun Citra Sari Dewi, M.Pd',
                'username' => 'angguncitrasari@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Perti Rosanda, M.A',
                'username' => 'pertirosanda@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Rambat Nursasongko, M.Pd',
                'username' => 'rambatnursasongko@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Connie, M.Pd.',
                'username' => 'connie@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Sumarsih, M.Pd.',
                'username' => 'sumarsih@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Manap Sumantri, M.Pd.',
                'username' => 'manapsumantri@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Asti Putri Kartiwi, S.E., M.Pd.',
                'username' => 'astiputrikartiwi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Muhammad Kristiawan, S.PdI., M.Pd.',
                'username' => 'muhammadkristiawan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Ria Ariesta, M.Pd.',
                'username' => 'riaariesta@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Suryadi, M.Hum.',
                'username' => 'suryadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Gumono, M.Pd.',
                'username' => 'gumono@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Agus Trianto, M.Pd.',
                'username' => 'agustrianto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Noermanzah, S.Pd., M.Pd.',
                'username' => 'noermanzah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Irma Diani, M.Hum.',
                'username' => 'irmadiani@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Afrizal Mayub, M.Kom.',
                'username' => 'afrizalmayub@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Aceng Ruyani, M.S.',
                'username' => 'acengruyani@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. M. Lutfi Firdaus, S.Si, M.T.',
                'username' => 'lutfifirdaus@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Henny Johan, S.Si., M.Pd.',
                'username' => 'hennyjohan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Euis Nursa\'adah, S.Pd., M.Pd.',
                'username' => 'euisnursaadah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Johanes Sapri, M.Pd.',
                'username' => 'johanessapri@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Bambang Sahono, M.Pd.',
                'username' => 'bambangsahono@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Alexon, M.Pd.',
                'username' => 'alexon@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Nina Kurniah, M.Pd.',
                'username' => 'ninakurniah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Bayu Insanistyo, S.Pd., M.Or.',
                'username' => 'bayuinsanistyo@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Buyung, M.Pd',
                'username' => 'buyung@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Wahyu Widada, M.Pd.',
                'username' => 'wahyuwidada@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Hanifah, M.Kom',
                'username' => 'hanifah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Agus Susanta, M.Ed., Ph.D.',
                'username' => 'agussusanta@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Saleh Haji, M.Pd.',
                'username' => 'salehhaji@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Dewi Herawaty, S.Pd. M.Pd.',
                'username' => 'dewiherawaty@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Hari Sumardi, S.Pd., M.Si.',
                'username' => 'harisumardi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Alamsyah Harahap, M.Lib.',
                'username' => 'alamsyahharahap@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Wisma Yunita, M.Pd.',
                'username' => 'wismayunita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Syafryadin, S.Pd., M.Pd.',
                'username' => 'syafryadin@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Ira Maisarah, S.Hum., M.Pd.',
                'username' => 'iramaisarah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Iis Sujarwati, M.Pd',
                'username' => 'iissujarwati@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Nurul Astuti Yensy B, S.Si, M.Si.',
                'username' => 'nurulastutiyensy@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Dewi Rahimah, S.Pd. M.Ed., Ph.D',
                'username' => 'dewirahimah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Syafdi Maizora, S.Si., M.Si',
                'username' => 'syafdimaizora@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Dr. Effie Efrida Muchlis, S.Pd.,M.Pd.',
                'username' => 'effiemuchlis@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Della Maulidiya, S.Si, M.Kom.',
                'username' => 'dellamaulidiya@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Ringki Agustinsa, S.Pd., M.Pd.',
                'username' => 'ringkiagustinsa@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Teddy Alfra Siagian, S.Pd., M.Pd.',
                'username' => 'teddysiagian@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Tria Utari, M.Pd',
                'username' => 'triautari@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Edi Susanto, M.Pd',
                'username' => 'edisusanto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Elwan Stiadi, M.Pd.',
                'username' => 'elwanstiadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Ratnah Lestary, S.Pd., M.Pd.',
                'username' => 'ratnahlestary@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Pratiwi Disha Stanggo, M.P.Mat',
                'username' => 'pratiwistanggo@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Prof. Dr. Endang Widi Winarni, M.Pd.',
                'username' => 'endangwidiwinarni@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Abdul Muktadir, M.Si.',
                'username' => 'abdulmuktadir@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. Irwan Koto, M.A.Ph.D',
                'username' => 'irwankoto@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Bambang Parmadi, S.Pd.,M.Sn.',
                'username' => 'bambangparmadi@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Badeni, M.A.',
                'username' => 'badeni@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Drs. Sudarwan, M.Pd.',
                'username' => 'sudarwan@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Syukri Hamzah, M.Si.',
                'username' => 'syukrihamzah@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Rendy Wikrama Wardana, S.Pd., M.Pd.',
                'username' => 'rendywikramawardana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Fitri April Yanti, M.Pd',
                'username' => 'fitriaprilyanti@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Safnil, M.A.,Ph.D.',
                'username' => 'safnil@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Sarwit Sarwono, M.Hum.',
                'username' => 'sarwitsarwono@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Prof. Dr. Arono, M.Pd.',
                'username' => 'arono@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Didi Yulistio, M.Pd.',
                'username' => 'didiyulistio@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Dian Eka Chandra Wardana, M.Pd.',
                'username' => 'dianekachandrawardana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. I Wayan Dharmayana, M.Psi.',
                'username' => 'iwayandharmayana@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dr. Osa Juarsa, M.Pd.',
                'username' => 'osajuarsa@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Dra. Hilda Puspita, Dip.TESL.,M.A.',
                'username' => 'hildapuspita@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Drs. M.Arifin, M.Pd.',
                'username' => 'marifin@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Irwandi Ansori, S.Pd, M.Si.',
                'username' => 'irwandiansori@unib.ac.id',
                'password' => bcrypt('assalamualaikum123'),
                'role' => 'dosen'
            ],                                                                                                                                                                           
        
        ];


        foreach ($userData as $key => $val) {
            User::create($val);
        }

        $dosens = [
            [
                'name' => 'Dr. I Wayan Dharmayana, M.Psi.',
                'NIP' => 'iwayandharmayana@unib.ac.id',
                'NomorNIP' => '196101231985031002',
            ],
            [
                'name' => 'Dr. Osa Juarsa, M.Pd.',
                'NIP' => 'osajuarsa@unib.ac.id',
                'NomorNIP' => '196206151986031027',
            ],
            [
                'name' => 'Dra. Hilda Puspita, Dip.TESL.,M.A.',
                'NIP' => 'hildapuspita@unib.ac.id',
                'NomorNIP' => '196104291987022001',
            ],
            [
                'name' => 'Drs. M.Arifin, M.Pd.',
                'NIP' => 'marifin@unib.ac.id',
                'NomorNIP' => '196505091989011001',
            ],
            [
                'name' => 'Irwandi Ansori, S.Pd, M.Si.',
                'NIP' => 'irwandiansori@unib.ac.id',
                'NomorNIP' => '197606082001121004',
            ],
            [
                'name' => 'Prof. Safnil, M.A.,Ph.D.',
                'NIP' => 'safnil@unib.ac.id',
                'NomorNIP' => '196101211986011002',
            ],
            [
                'name' => 'Prof. Dr. Sarwit Sarwono, M.Hum.',
                'NIP' => 'sarwitsarwono@unib.ac.id',
                'NomorNIP' => '195810121986031003',
            ],
            [
                'name' => 'Prof. Dr. Arono, M.Pd.',
                'NIP' => 'arono@unib.ac.id',
                'NomorNIP' => '197703142005011004',
            ],
            [
                'name' => 'Dr. Didi Yulistio, M.Pd.',
                'NIP' => 'didiyulistio@unib.ac.id',
                'NomorNIP' => '196406261990031002',
            ],
            [
                'name' => 'Dr. Dian Eka Chandra Wardana, M.Pd.',
                'NIP' => 'dianekachandrawardana@unib.ac.id',
                'NomorNIP' => '195911041984032001',
            ],
            [
                'name' => 'Prof. Dr. Badeni, M.A.',
                'NIP' => 'badeni@unib.ac.id',
                'NomorNIP' => '195706031984031002',
            ],
            [
                'name' => 'Prof. Dr. Drs. Sudarwan, M.Pd.',
                'NIP' => 'sudarwan@unib.ac.id',
                'NomorNIP' => '195902201984031001',
            ],
            [
                'name' => 'Prof. Dr. Syukri Hamzah, M.Si.',
                'NIP' => 'syukrihamzah@unib.ac.id',
                'NomorNIP' => '195511201984031004',
            ],
            [
                'name' => 'Dr. Rendy Wikrama Wardana, S.Pd., M.Pd.',
                'NIP' => 'rendywikramawardana@unib.ac.id',
                'NomorNIP' => '198608312019031012',
            ],
            [
                'name' => 'Dr. Fitri April Yanti, M.Pd',
                'NIP' => 'fitriaprilyanti@unib.ac.id',
                'NomorNIP' => '199104092020122011',
            ],
            [
                'name' => 'Prof. Dr. Endang Widi Winarni, M.Pd.',
                'NIP' => 'endangwidiwinarni@unib.ac.id',
                'NomorNIP' => '196009041987022001',
            ],
            [
                'name' => 'Dr. Abdul Muktadir, M.Si.',
                'NIP' => 'abdulmuktadir@unib.ac.id',
                'NomorNIP' => '196212191986111001',
            ],
            [
                'name' => 'Drs. Irwan Koto, M.A.Ph.D',
                'NIP' => 'irwankoto@unib.ac.id',
                'NomorNIP' => '196104011986031001',
            ],
            [
                'name' => 'Dr. Bambang Parmadi, S.Pd.,M.Sn.',
                'NIP' => 'bambangparmadi@unib.ac.id',
                'NomorNIP' => '197405062000121002',
            ],
            [
                'name' => 'Dr. Alamsyah Harahap, M.Lib.',
                'NIP' => 'alamsyahharahap@unib.ac.id',
                'NomorNIP' => '196005171983121001',
            ],
            [
                'name' => 'Dr. Wisma Yunita, M.Pd.',
                'NIP' => 'wismayunita@unib.ac.id',
                'NomorNIP' => '197802072005012003',
            ],
            [
                'name' => 'Dr. Syafryadin, S.Pd., M.Pd.',
                'NIP' => 'syafryadin@unib.ac.id',
                'NomorNIP' => '198806182019031006',
            ],
            [
                'name' => 'Dr. Ira Maisarah, S.Hum., M.Pd.',
                'NIP' => 'iramaisarah@unib.ac.id',
                'NomorNIP' => '198405252019032020',
            ],
            [
                'name' => 'Dr. Iis Sujarwati, M.Pd',
                'NIP' => 'iissujarwati@unib.ac.id',
                'NomorNIP' => '198808162020122007',
            ],
            [
                'name' => 'Prof. Dr. Wahyu Widada, M.Pd.',
                'NIP' => 'wahyuwidada@unib.ac.id',
                'NomorNIP' => '196903061993031002',
            ],
            [
                'name' => 'Dr. Hanifah, M.Kom',
                'NIP' => 'hanifah@unib.ac.id',
                'NomorNIP' => '196208151986032024',
            ],
            [
                'name' => 'Drs. Agus Susanta, M.Ed., Ph.D.',
                'NIP' => 'agussusanta@unib.ac.id',
                'NomorNIP' => '196003291986031003',
            ],
            [
                'name' => 'Dr. Saleh Haji, M.Pd.',
                'NIP' => 'salehhaji@unib.ac.id',
                'NomorNIP' => '196005251986011002',
            ],
            [
                'name' => 'Dr. Dewi Herawaty, S.Pd. M.Pd.',
                'NIP' => 'dewiherawaty@unib.ac.id',
                'NomorNIP' => '197103291994122001',
            ],
            [
                'name' => 'Dr. Hari Sumardi, S.Pd., M.Si.',
                'NIP' => 'harisumardi@unib.ac.id',
                'NomorNIP' => '198905182019031009',
            ],
            [
                'name' => 'Prof. Dr. Johanes Sapri, M.Pd.',
                'NIP' => 'johanessapri@unib.ac.id',
                'NomorNIP' => '196012121985031003',
            ],
            [
                'name' => 'Prof. Dr. Bambang Sahono, M.Pd.',
                'NIP' => 'bambangsahono@unib.ac.id',
                'NomorNIP' => '195910151985031016',
            ],
            [
                'name' => 'Dr. Alexon, M.Pd.',
                'NIP' => 'alexon@unib.ac.id',
                'NomorNIP' => '196012021986031002',
            ],
            [
                'name' => 'Dr. Nina Kurniah, M.Pd.',
                'NIP' => 'ninakurniah@unib.ac.id',
                'NomorNIP' => '196210141986012001',
            ],
            [
                'name' => 'Dr. Bayu Insanistyo, S.Pd., M.Or.',
                'NIP' => 'bayuinsanistyo@unib.ac.id',
                'NomorNIP' => '198310032008121003',
            ],
            [
                'name' => 'Dr. Buyung, M.Pd',
                'NIP' => 'buyung@unib.ac.id',
                'NomorNIP' => '198402012020121001',
            ],
            [
                'name' => 'Prof. Dr. Afrizal Mayub, M.Kom.',
                'NIP' => 'afrizalmayub@unib.ac.id',
                'NomorNIP' => '196004181987031004',
            ],
            [
                'name' => 'Prof. Dr. Aceng Ruyani, M.S.',
                'NIP' => 'acengruyani@unib.ac.id',
                'NomorNIP' => '196001051986031006',
            ],
            [
                'name' => 'Prof. Dr. M. Lutfi Firdaus, S.Si, M.T.',
                'NIP' => 'lutfifirdaus@unib.ac.id',
                'NomorNIP' => '197310222000031001',
            ],
            [
                'name' => 'Dr. Henny Johan, S.Si., M.Pd.',
                'NIP' => 'hennyjohan@unib.ac.id',
                'NomorNIP' => '198408262008122003',
            ],
            [
                'name' => 'Dr. Euis Nursa\'adah, S.Pd., M.Pd.',
                'NIP' => 'euisnursaadah@unib.ac.id',
                'NomorNIP' => '198403062019032008',
            ],
            [
                'name' => 'Dr. Ria Ariesta, M.Pd.',
                'NIP' => 'riaariesta@unib.ac.id',
                'NomorNIP' => '196204011986012002',
            ],
            [
                'name' => 'Dr. Suryadi, M.Hum.',
                'NIP' => 'suryadi@unib.ac.id',
                'NomorNIP' => '196012021989031002',
            ],
            [
                'name' => 'Dr. Gumono, M.Pd.',
                'NIP' => 'gumono@unib.ac.id',
                'NomorNIP' => '197103131999031002',
            ],
            [
                'name' => 'Dr. Agus Trianto, M.Pd.',
                'NIP' => 'agustrianto@unib.ac.id',
                'NomorNIP' => '196208171986031004',
            ],
            [
                'name' => 'Dr. Noermanzah, S.Pd., M.Pd.',
                'NIP' => 'noermanzah@unib.ac.id',
                'NomorNIP' => '198702142019031007',
            ],
            [
                'name' => 'Dr. Irma Diani, M.Hum.',
                'NIP' => 'irmadiani@unib.ac.id',
                'NomorNIP' => '197212102006042003',
            ],
            [
                'name' => 'Prof. Dr. Rambat Nursasongko, M.Pd',
                'NIP' => 'rambatnursasongko@unib.ac.id',
                'NomorNIP' => '196112071986011001',
            ],
            [
                'name' => 'Dr. Connie, M.Pd.',
                'NIP' => 'connie@unib.ac.id',
                'NomorNIP' => '196102091985032002',
            ],
            [
                'name' => 'Dr. Sumarsih, M.Pd.',
                'NIP' => 'sumarsih@unib.ac.id',
                'NomorNIP' => '196005261987032004',
            ],
            [
                'name' => 'Dr. Manap Sumantri, M.Pd.',
                'NIP' => 'manapsumantri@unib.ac.id',
                'NomorNIP' => '195905201986031001',
            ],
            [
                'name' => 'Dr. Asti Putri Kartiwi, S.E., M.Pd.',
                'NIP' => 'astiputrikartiwi@unib.ac.id',
                'NomorNIP' => '198403222019032006',
            ],
            [
                'name' => 'Dr. Muhammad Kristiawan, S.PdI., M.Pd.',
                'NIP' => 'muhammadkristiawan@unib.ac.id',
                'NomorNIP' => '198509162019031011',
            ],
            [
                'name' => 'Drs. Mulyadi, Dip. TESL.,M.A.',
                'NIP' => 'mulyadi@unib.ac.id',
                'NomorNIP' => '195910241987021002',
            ],
            [
                'name' => 'Drs. Mukhrizal, M.App.Ling.',
                'NIP' => 'mukhrizal@unib.ac.id',
                'NomorNIP' => '195909171986011001',
            ],
            [
                'name' => 'Dra. Elfrida, M.Pd.',
                'NIP' => 'elfrida@unib.ac.id',
                'NomorNIP' => '196103251984032001',
            ],
            [
                'name' => 'Kasmaini, S.S, M.Pd.',
                'NIP' => 'kasmaini@unib.ac.id',
                'NomorNIP' => '197208251997022001',
            ],
            [
                'name' => 'Mei Hardiah, S.S.,M.A.',
                'NIP' => 'meihardiah@unib.ac.id',
                'NomorNIP' => '198005032008012017',
            ],
            [
                'name' => 'Dr. Dra. Erni Sukesi, M.Pd.',
                'NIP' => 'ernisukesi@unib.ac.id',
                'NomorNIP' => '196102261986032003',
            ],
            [
                'name' => 'Dr. Dedi Sofyan, M.Hum.',
                'NIP' => 'dedisofyan@unib.ac.id',
                'NomorNIP' => '197309261999031001',
            ],
            [
                'name' => 'Zahrida, S.S, M.Hum.',
                'NIP' => 'zahrida@unib.ac.id',
                'NomorNIP' => '197407012000032001',
            ],
            [
                'name' => 'Indah Damayanti, S.S., M.R.S.',
                'NIP' => 'indahdamayanti@unib.ac.id',
                'NomorNIP' => '197808292008012013',
            ],
            [
                'name' => 'Eka Novita, S.Pd.,M.A.',
                'NIP' => 'ekanovita@unib.ac.id',
                'NomorNIP' => '198011032005012002',
            ],
            [
                'name' => 'Gita Mutiara Hati, M.Pd.',
                'NIP' => 'gitamutiarahati@unib.ac.id',
                'NomorNIP' => '198310222006042003',
            ],
            [
                'name' => 'Ildi Kurniawan, S.Pd., M.Pd.',
                'NIP' => 'ildikurniawan@unib.ac.id',
                'NomorNIP' => '198502082014041001',
            ],
            [
                'name' => 'Sufiyandi, S.Pd., M.Pd.',
                'NIP' => 'sufiyandi@unib.ac.id',
                'NomorNIP' => '198407182019031001',
            ],
            [
                'name' => 'Fernandita Gusweni Jayanti, M.Pd.',
                'NIP' => 'fernanditajayanti@unib.ac.id',
                'NomorNIP' => '198908032015042004',
            ],
            [
                'name' => 'Azhar Aziz Lubis, M.Pd',
                'NIP' => 'azharlubis@unib.ac.id',
                'NomorNIP' => '198803292018031001',
            ],
            [
                'name' => 'Muhammad Fadhli, S.Pd., M.Pd.',
                'NIP' => 'muhammadfadhli@unib.ac.id',
                'NomorNIP' => '198901212019031009',
            ],
            [
                'name' => 'Eko Saputra, S.Pd., M.A',
                'NIP' => 'ekosaputra@unib.ac.id',
                'NomorNIP' => '199101242020121005',
            ],
            [
                'name' => 'Dwi Bayu Saputra, M.Pd.',
                'NIP' => 'dwibayusaputra@unib.ac.id',
                'NomorNIP' => '199101302022031003',
            ],
            [
                'name' => 'Adelia Puspa, M.Pd.',
                'NIP' => 'adeliapuspa@unib.ac.id',
                'NomorNIP' => '199101112022032005',
            ],
            [
                'name' => 'Lia Haryana, S.Pd., M.Pd.',
                'NIP' => 'liaharyana@unib.ac.id',
                'NomorNIP' => '199411162022032012',
            ],
            [
                'name' => 'Anggun Citra Sari Dewi, M.Pd',
                'NIP' => 'angguncitrasari@unib.ac.id',
                'NomorNIP' => '198908152015072999',
            ],
            [
                'name' => 'Perti Rosanda, M.A',
                'NIP' => 'pertirosanda@unib.ac.id',
                'NomorNIP' => '199008082023212058',
            ],
            [
                'name' => 'Drs. Supadi, M.Hum.',
                'NIP' => 'supadi@unib.ac.id',
                'NomorNIP' => '195909301987021001',
            ],
            [
                'name' => 'Dra. Ngudining Rahayu, M.Hum.',
                'NIP' => 'ngudiningrahayu@unib.ac.id',
                'NomorNIP' => '196009181986032003',
            ],
            [
                'name' => 'Dra. Emi Agustina, M.Hum.',
                'NIP' => 'emiagustina@unib.ac.id',
                'NomorNIP' => '196508171990032001',
            ],
            [
                'name' => 'Dra. Yayah Chanafiah, M.Hum.',
                'NIP' => 'yayahchanafiah@unib.ac.id',
                'NomorNIP' => '196108101989012001',
            ],
            [
                'name' => 'Drs. Amrizal, M.Hum.',
                'NIP' => 'amrizal@unib.ac.id',
                'NomorNIP' => '195907101985031004',
            ],
            [
                'name' => 'Drs. Padi Utomo, M.Pd.',
                'NIP' => 'padiutomo@unib.ac.id',
                'NomorNIP' => '196111071986091001',
            ],
            [
                'name' => 'Drs. Agus Joko Purwadi, M.Pd.',
                'NIP' => 'agusjokopurwadi@unib.ac.id',
                'NomorNIP' => '195908281984031005',
            ],
            [
                'name' => 'Drs. Amril Canrhas, M.S.',
                'NIP' => 'amrilcanrhas@unib.ac.id',
                'NomorNIP' => '195908051985031007',
            ],
            [
                'name' => 'Bustanuddin Lubis, S.S.M.A.',
                'NIP' => 'bustanuddinlubis@unib.ac.id',
                'NomorNIP' => '197906042002121003',
            ],
            [
                'name' => 'Dr. Catur Wulandari, S.Pd., M.Pd.',
                'NIP' => 'caturwulandari@unib.ac.id',
                'NomorNIP' => '197808112005012002',
            ],
            [
                'name' => 'Dr. Nafri Yanti, S.Pd.,M.Pd.',
                'NIP' => 'nafriyanti@unib.ac.id',
                'NomorNIP' => '198911142015042002',
            ],
            [
                'name' => 'Rio Kurniawan, S.Pd., M.Pd.',
                'NIP' => 'riokurniawan@unib.ac.id',
                'NomorNIP' => '198905222014041002',
            ],
            [
                'name' => 'Fina Hiasa, S.Pd., M.A.',
                'NIP' => 'finahiasa@unib.ac.id',
                'NomorNIP' => '199007062019032016',
            ],
            [
                'name' => 'Wisman, S.Pd., M.Pd.',
                'NIP' => 'wisman@unib.ac.id',
                'NomorNIP' => '199003252019031016',
            ],
            [
                'name' => 'Meli Afrodita, M.Pd.',
                'NIP' => 'meliafrodita@unib.ac.id',
                'NomorNIP' => '199304082022032006',
            ],
            [
                'name' => 'Lazfihma, S.S., M.Pd',
                'NIP' => 'lazfihma@unib.ac.id',
                'NomorNIP' => '199003172022032010',
            ],
            [
                'name' => 'Fitra Youpika, S.Pd.,M.Pd',
                'NIP' => 'fitrayoupika@unib.ac.id',
                'NomorNIP' => '199212262015101999',
            ],
            [
                'name' => 'Dr. Nirwana, M.Pd.',
                'NIP' => 'nirwana@unib.ac.id',
                'NomorNIP' => '195909121985032001',
            ],
            [
                'name' => 'Dra. Ariefa Primairyani, M.Si',
                'NIP' => 'ariefaprimairyani@unib.ac.id',
                'NomorNIP' => '196003061987032001',
            ],
            [
                'name' => 'Dr. Bhakti Karyadi, M.Pd.',
                'NIP' => 'bhaktikaryadi@unib.ac.id',
                'NomorNIP' => '196101041987021001',
            ],
            [
                'name' => 'Drs. Indra Sakti Lubis, M.Pd.',
                'NIP' => 'indrasaktilubis@unib.ac.id',
                'NomorNIP' => '195912131984031001',
            ],
            [
                'name' => 'Dr. Sutarno, S.Si., M.Pd.',
                'NIP' => 'sutarno@unib.ac.id',
                'NomorNIP' => '198009242006041002',
            ],
            [
                'name' => 'Mellyta Uliyandari, S.Pd., M.Pd.Si.',
                'NIP' => 'mellytauliyandari@unib.ac.id',
                'NomorNIP' => '199208192019032022',
            ],
            [
                'name' => 'Emilia Candrawati, S.Pd., M.Pd.',
                'NIP' => 'emiliacandrawati@unib.ac.id',
                'NomorNIP' => '198310072019032006',
            ],
            [
                'name' => 'Aprina Defianti, S.Pd.,M.Pd',
                'NIP' => 'aprinadefianti@unib.ac.id',
                'NomorNIP' => '199004172022032011',
            ],
            [
                'name' => 'Syaiful Rochman, S.Pd.,M.Pd',
                'NIP' => 'syaifulrochman@unib.ac.id',
                'NomorNIP' => '199004042017011999',
            ],
            [
                'name' => 'Deni Parlindungan, M.Pd.Si',
                'NIP' => 'deniparlindungan@unib.ac.id',
                'NomorNIP' => '198909202023211023',
            ],
            [
                'name' => 'Dra. Sri Irawati, M.Pd.',
                'NIP' => 'sriirawati@unib.ac.id',
                'NomorNIP' => '196003261984032004',
            ],
            [
                'name' => 'Dra. Kasrina, M.Si',
                'NIP' => 'kasrina@unib.ac.id',
                'NomorNIP' => '196508271991022001',
            ],
            [
                'name' => 'Dra. Yennita, M.Si.',
                'NIP' => 'yennita@unib.ac.id',
                'NomorNIP' => '196410101991022001',
            ],
            [
                'name' => 'Dr. Drs. Abas, M.Pd.',
                'NIP' => 'abas@unib.ac.id',
                'NomorNIP' => '196411151991031003',
            ],
            [
                'name' => 'Abdul Rahman, S.Si.,M.Si.,Ph.D',
                'NIP' => 'abdulrahman@unib.ac.id',
                'NomorNIP' => '198108202006041006',
            ],
            [
                'name' => 'Drs. Syarif Hidayat, M.Pd.',
                'NIP' => 'syarifhidayat@unib.ac.id',
                'NomorNIP' => '196010081986031002',
            ],
            [
                'name' => 'Dewi Jumiarni, S.Si, M.Si.',
                'NIP' => 'dewijumiarni@unib.ac.id',
                'NomorNIP' => '198101022005012003',
            ],
            [
                'name' => 'Alif Yanuar Zukmadini, S.Pd., M.Pd.',
                'NIP' => 'alifyanuarzukmadini@unib.ac.id',
                'NomorNIP' => '199101282019032018',
            ],
            [
                'name' => 'Neni Murniati, S.Pd., M.Pd.',
                'NIP' => 'nenimurniati@unib.ac.id',
                'NomorNIP' => '198711172019032011',
            ],
            [
                'name' => 'Ahmad Saddam Husein, S.Pd., M.Sc.',
                'NIP' => 'ahmadsaddamhusein@unib.ac.id',
                'NomorNIP' => '199103042022031008',
            ],
            [
                'name' => 'Rendi Zulni Eka Putri, M.Pd.Si',
                'NIP' => 'rendizulniekaputri@unib.ac.id',
                'NomorNIP' => '198906172023212054',
            ],
            [
                'name' => 'Wiwit, S.Si, M.Si., Ph.D',
                'NIP' => 'wiwit@unib.ac.id',
                'NomorNIP' => '198205122008122002',
            ],
            [
                'name' => 'Dr. Nurhamidah, M.Si.',
                'NIP' => 'nurhamidah@unib.ac.id',
                'NomorNIP' => '196403081992032001',
            ],
            [
                'name' => 'Dr.nat.techn. I Nyoman Candra, S.Si.,M.Sc.',
                'NIP' => 'inyomancandra@unib.ac.id',
                'NomorNIP' => '198307292006041001',
            ],
            [
                'name' => 'Dr. Dewi Handayani, S.Pd., M.Si.',
                'NIP' => 'dewihandayani@unib.ac.id',
                'NomorNIP' => '198212262005012002',
            ],
            [
                'name' => 'Sura Menda Ginting, S.Si., M.Sc., Ph.D.',
                'NIP' => 'suramendaginting@unib.ac.id',
                'NomorNIP' => '198101312005012003',
            ],
            [
                'name' => 'Elvinawati, S.Si., M.Si.',
                'NIP' => 'elvinawati@unib.ac.id',
                'NomorNIP' => '197810102003122001',
            ],
            [
                'name' => 'Salastri Rohiat, S.Pd., M.Pd.',
                'NIP' => 'salastrirohiat@unib.ac.id',
                'NomorNIP' => '198104282006042001',
            ],
            [
                'name' => 'Febrian Solikhin, S.Pd., M.Pd.',
                'NIP' => 'febriansolikhin@unib.ac.id',
                'NomorNIP' => '199302282019031013',
            ],
            [
                'name' => 'Drs. Hermansyah Amir, M.Pd',
                'NIP' => 'hermansyahamir@unib.ac.id',
                'NomorNIP' => '196209201998031001',
            ],
            [
                'name' => 'Nadia Amida, S.Pd., M.Pd.',
                'NIP' => 'nadiaamida@unib.ac.id',
                'NomorNIP' => '199010282019032021',
            ],
            [
                'name' => 'Dr. Rina Elvia, S.Si, M.Si',
                'NIP' => 'rinaelvia@unib.ac.id',
                'NomorNIP' => '197505122000032007',
            ],
            [
                'name' => 'Dr. Rosane Medriati, M.Pd.',
                'NIP' => 'rosanemedriati@unib.ac.id',
                'NomorNIP' => '196112101986032003',
            ],
            [
                'name' => 'Andik Purwanto, S.Pd, M.Si.',
                'NIP' => 'andikpurwanto@unib.ac.id',
                'NomorNIP' => '198011022005011002',
            ],
            [
                'name' => 'Dr. Eko Risdianto, S.Si, M.Cs.',
                'NIP' => 'ekorisdianto@unib.ac.id',
                'NomorNIP' => '198012312005011002',
            ],
            [
                'name' => 'Dedy Hamdani, S.Si, M.Si',
                'NIP' => 'dedyhamdani@unib.ac.id',
                'NomorNIP' => '197911252003121001',
            ],
            [
                'name' => 'Dr. Iwan Setiawan, S.Si, M.Sc.',
                'NIP' => 'iwansetiawan@unib.ac.id',
                'NomorNIP' => '198009112010121002',
            ],
            [
                'name' => 'Desy Henisa Putri, S.Pd, M.Si',
                'NIP' => 'desyhenisaputri@unib.ac.id',
                'NomorNIP' => '198104112006042002',
            ],
            [
                'name' => 'Ahmad Syarkowi, S.Pd., M.Pd.',
                'NIP' => 'ahmadsyarkowi@unib.ac.id',
                'NomorNIP' => '198909222019031007',
            ],
            [
                'name' => 'Bodi Gunawan, M.Si.',
                'NIP' => 'bodigunawan@unib.ac.id',
                'NomorNIP' => '198809262023211018',
            ],
            [
                'name' => 'Nurul Astuti Yensy B, S.Si, M.Si.',
                'NIP' => 'nurulastutiyensy@unib.ac.id',
                'NomorNIP' => '197504092006042001',
            ],
            [
                'name' => 'Dewi Rahimah, S.Pd. M.Ed., Ph.D',
                'NIP' => 'dewirahimah@unib.ac.id',
                'NomorNIP' => '198203282005012001',
            ],
            [
                'name' => 'Syafdi Maizora, S.Si., M.Si',
                'NIP' => 'syafdimaizora@unib.ac.id',
                'NomorNIP' => '198105022005011002',
            ],
            [
                'name' => 'Dr. Effie Efrida Muchlis, S.Pd.,M.Pd.',
                'NIP' => 'effiemuchlis@unib.ac.id',
                'NomorNIP' => '198205242005012014',
            ],
            [
                'name' => 'Della Maulidiya, S.Si, M.Kom.',
                'NIP' => 'dellamaulidiya@unib.ac.id',
                'NomorNIP' => '197902242003122002',
            ],
            [
                'name' => 'Ringki Agustinsa, S.Pd., M.Pd.',
                'NIP' => 'ringkiagustinsa@unib.ac.id',
                'NomorNIP' => '198708012019031010',
            ],
            [
                'name' => 'Teddy Alfra Siagian, S.Pd., M.Pd.',
                'NIP' => 'teddysiagian@unib.ac.id',
                'NomorNIP' => '199009162019031019',
            ],
            [
                'name' => 'Tria Utari, M.Pd',
                'NIP' => 'triautari@unib.ac.id',
                'NomorNIP' => '199208302020122021',
            ],
            [
                'name' => 'Edi Susanto, M.Pd',
                'NIP' => 'edisusanto@unib.ac.id',
                'NomorNIP' => '199008202022031010',
            ],
            [
                'name' => 'Elwan Stiadi, M.Pd.',
                'NIP' => 'elwanstiadi@unib.ac.id',
                'NomorNIP' => '199201032022031004',
            ],
            [
                'name' => 'Ratnah Lestary, S.Pd., M.Pd.',
                'NIP' => 'ratnahlestary@unib.ac.id',
                'NomorNIP' => '199408142022032016',
            ],
            [
                'name' => 'Pratiwi Disha Stanggo, M.P.Mat',
                'NIP' => 'pratiwistanggo@unib.ac.id',
                'NomorNIP' => '198909152023212043',
            ],
            [
                'name' => 'Dra. Sri Saparahayuningsih, M.Pd.',
                'NIP' => 'srisaparahayuningsih@unib.ac.id',
                'NomorNIP' => '195909011985032002',
            ],
            [
                'name' => 'Drs. Syahriman, M.Pd.',
                'NIP' => 'syahriman@unib.ac.id',
                'NomorNIP' => '196004141986091001',
            ],
            [
                'name' => 'Rita Sinthia, S.Psi., M.Si.',
                'NIP' => 'ritasinthia@unib.ac.id',
                'NomorNIP' => '197806272006042002',
            ],
            [
                'name' => 'Dr. Yessy Elita, S.Psi. M.A.',
                'NIP' => 'yessyelita@unib.ac.id',
                'NomorNIP' => '197911112006042001',
            ],
            [
                'name' => 'Dra. Anni Suprapti, M.Psi.',
                'NIP' => 'annisuprapti@unib.ac.id',
                'NomorNIP' => '196205121989012001',
            ],
            [
                'name' => 'Vira Avriyati, M.Pd., Kons.',
                'NIP' => 'viraavriyati@unib.ac.id',
                'NomorNIP' => '198706292014042002',
            ],
            [
                'name' => 'Arsyadani Mishbahuddin, M.Pd.I.',
                'NIP' => 'arsyadanimishbahuddin@unib.ac.id',
                'NomorNIP' => '198703112014041001',
            ],
            [
                'name' => 'Anna Ayu Herawati, S.Pd., M.Pd.',
                'NIP' => 'annaayuherawati@unib.ac.id',
                'NomorNIP' => '199203082019032013',
            ],
            [
                'name' => 'Adif Jawadi Saputra, M.Pd.',
                'NIP' => 'adifjawadisaputra@unib.ac.id',
                'NomorNIP' => '199306232022031008',
            ],
            [
                'name' => 'Mayang T. Afriwilda, M.Pd.',
                'NIP' => 'mayangafriwilda@unib.ac.id',
                'NomorNIP' => '199604012022032016',
            ],
            [
                'name' => 'Drs. Rufran Zulkarnain, M.Pd.',
                'NIP' => 'rufranzulkarnain@unib.ac.id',
                'NomorNIP' => '195910051985031006',
            ],
            [
                'name' => 'Dr. Ilham Abdullah, M.Pd.',
                'NIP' => 'ilhamabdullah@unib.ac.id',
                'NomorNIP' => '195911101989031004',
            ],
            [
                'name' => 'Drs. Sofino, M.Pd.',
                'NIP' => 'sofino@unib.ac.id',
                'NomorNIP' => '196211121988031001',
            ],
            [
                'name' => 'Citra Dwi Palenti, S.Pd., M.Pd.',
                'NIP' => 'citradwipalenti@unib.ac.id',
                'NomorNIP' => '199305182019032020',
            ],
            [
                'name' => 'Ririn Gusti, M.Pd.I',
                'NIP' => 'riringusti@unib.ac.id',
                'NomorNIP' => '198808312014042001',
            ],
            [
                'name' => 'Bayu Pradikto, S.Pd., M.Pd.',
                'NIP' => 'bayupradikto@unib.ac.id',
                'NomorNIP' => '199107192019031014',
            ],
            [
                'name' => 'Lenni Mantili Hutauruk, M.Ed.',
                'NIP' => 'lennihutauruk@unib.ac.id',
                'NomorNIP' => '199111232022032007',
            ],
            [
                'name' => 'Dwi Ismawati, M.Pd.',
                'NIP' => 'dwiismawati@unib.ac.id',
                'NomorNIP' => '199607052022032012',
            ],
            [
                'name' => 'Ari Putra, S.Pd., M.Pd.',
                'NIP' => 'ariputra@unib.ac.id',
                'NomorNIP' => '199110042022031005',
            ],
            [
                'name' => 'Dra. Yarmani, M.Kes.',
                'NIP' => 'yarmani@unib.ac.id',
                'NomorNIP' => '196204031988032002',
            ],
            [
                'name' => 'Drs. Syafrial, M.Kes.',
                'NIP' => 'syafrial@unib.ac.id',
                'NomorNIP' => '196106151986031005',
            ],
            [
                'name' => 'Drs. Tono Sugihartono, M.Pd.',
                'NIP' => 'tonosugihartono@unib.ac.id',
                'NomorNIP' => '196208231988031002',
            ],
            [
                'name' => 'Dr. Dian Pujianto, S.Pd. Jas.,M.Or.',
                'NIP' => 'dianpujianto@unib.ac.id',
                'NomorNIP' => '198005102009121001',
            ],
            [
                'name' => 'Drs. Arwin, M.Pd.',
                'NIP' => 'arwin@unib.ac.id',
                'NomorNIP' => '195908081985031004',
            ],
            [
                'name' => 'Drs. Ari Sutisyana, M.Pd.',
                'NIP' => 'arisutisyana@unib.ac.id',
                'NomorNIP' => '196106261987101002',
            ],
            [
                'name' => 'Yahya Eko Nopiyanto, S.Pd., M.Pd.',
                'NIP' => 'yahyaekonopiyanto@unib.ac.id',
                'NomorNIP' => '199211292019031015',
            ],
            [
                'name' => 'Septian Raibowo, S.Pd., M.Pd.',
                'NIP' => 'septianraibowo@unib.ac.id',
                'NomorNIP' => '199309132019031016',
            ],
            [
                'name' => 'Andika Prabowo, M.Pd',
                'NIP' => 'andikaprabowo@unib.ac.id',
                'NomorNIP' => '199410212020121015',
            ],
            [
                'name' => 'Oddie Barnanda Rizky, M.Pd.',
                'NIP' => 'oddiebarnandarizky@unib.ac.id',
                'NomorNIP' => '199408082022031006',
            ],
            [
                'name' => 'Andes Permadi, M.Pd.',
                'NIP' => 'andespermadi@unib.ac.id',
                'NomorNIP' => '199212182022031011',
            ],
            [
                'name' => 'Bogy Restu Ilahi, M.Pd',
                'NIP' => 'bogyrestuilahi@unib.ac.id',
                'NomorNIP' => '199109012023211018',
            ],
            [
                'name' => 'Defliyanto, M.Pd',
                'NIP' => 'defliyanto@unib.ac.id',
                'NomorNIP' => '199201062018011999',
            ],
            [
                'name' => 'Prof. Dr. Riyanto, M.Pd.',
                'NIP' => 'riyanto@unib.ac.id',
                'NomorNIP' => '196006221989031002',
            ],
            [
                'name' => 'Wembrayarli, S.Pd.M.Sn.',
                'NIP' => 'wembrayarli@unib.ac.id',
                'NomorNIP' => '196112051991031008',
            ],
            [
                'name' => 'Dr. Didik Suryadi, M.A.',
                'NIP' => 'didiksuryadi@unib.ac.id',
                'NomorNIP' => '196204251986121001',
            ],
            [
                'name' => 'Drs. Delrefi, M.Pd.',
                'NIP' => 'delrefi@unib.ac.id',
                'NomorNIP' => '196205061987101001',
            ],
            [
                'name' => 'Dra. Indrawati, M.Pd.TP',
                'NIP' => 'indrawati@unib.ac.id',
                'NomorNIP' => '196103081986032002',
            ],
            [
                'name' => 'Mona Ardina, S.Psi. M.Si.',
                'NIP' => 'monaardina@unib.ac.id',
                'NomorNIP' => '197409192001122006',
            ],
            [
                'name' => 'Melia Eka Daryati, S.Pd., M.Pd.',
                'NIP' => 'meliaekadaryati@unib.ac.id',
                'NomorNIP' => '199010152019032019',
            ],
            [
                'name' => 'Zahratul Qalbi, S.Pd., M.Pd.',
                'NIP' => 'zahratulqalbi@unib.ac.id',
                'NomorNIP' => '199303162019032018',
            ],
            [
                'name' => 'Septi Fitriana, M.Pd.',
                'NIP' => 'septifitriana@unib.ac.id',
                'NomorNIP' => '199009032022032004',
            ],
            [
                'name' => 'Dwi Lyna Sari, M.Pd.',
                'NIP' => 'dwilynasari@unib.ac.id',
                'NomorNIP' => '199109242022032008',
            ],
            [
                'name' => 'Dr. Nesna Agustriana, M.Pd',
                'NIP' => 'nesnaagustriana@unib.ac.id',
                'NomorNIP' => '198708282023212045',
            ],
            [
                'name' => 'Dra. Nani Yuliantini, M.Pd.',
                'NIP' => 'naniyuliantini@unib.ac.id',
                'NomorNIP' => '196007091986032003',
            ],
            [
                'name' => 'Drs. Herman, M.Pd.',
                'NIP' => 'herman@unib.ac.id',
                'NomorNIP' => '196005101987101001',
            ],
            [
                'name' => 'Dra. Hasnawati, M.Si.',
                'NIP' => 'hasnawati@unib.ac.id',
                'NomorNIP' => '195904211986032002',
            ],
            [
                'name' => 'Dra. Dalifa, M.Pd.',
                'NIP' => 'dalifa@unib.ac.id',
                'NomorNIP' => '196010101986032005',
            ],
            [
                'name' => 'Dwi Anggraini, S.Sn.M.Pd.',
                'NIP' => 'dwianggraini@unib.ac.id',
                'NomorNIP' => '198501102008122002',
            ],
            [
                'name' => 'Feri Noperman, M.Pd.',
                'NIP' => 'ferinoperman@unib.ac.id',
                'NomorNIP' => '198211062008011007',
            ],
            [
                'name' => 'Neza Agusdianita, M.Pd.',
                'NIP' => 'nezaagusdianita@unib.ac.id',
                'NomorNIP' => '198908192015042002',
            ],
            [
                'name' => 'Pebrian Tarmizi, S.Pd., M.Pd.',
                'NIP' => 'pebriantarmizi@unib.ac.id',
                'NomorNIP' => '198102222008121004',
            ],
            [
                'name' => 'Panut Setiono, S.Pd., M.Pd.',
                'NIP' => 'panutsetiono@unib.ac.id',
                'NomorNIP' => '198902272019031015',
            ],
            [
                'name' => 'Irfan Supriatna, S.Pd., M.Pd.',
                'NIP' => 'irfansupriatna@unib.ac.id',
                'NomorNIP' => '198806152019031011',
            ],
            [
                'name' => 'Nady Febri Ariffiando, S.Pd., M.Pd.',
                'NIP' => 'nadyfebriariffiando@unib.ac.id',
                'NomorNIP' => '199304062019031008',
            ],
            [
                'name' => 'Atika Susanti, S.Pd., M.Pd',
                'NIP' => 'atikasusanti@unib.ac.id',
                'NomorNIP' => '199306082020122012',
            ],
            [
                'name' => 'Ike Kurniawati, M.Pd.',
                'NIP' => 'ikekurniawati@unib.ac.id',
                'NomorNIP' => '199609252022032011',
            ],
            [
                'name' => 'Yusnia, M.Pd.',
                'NIP' => 'yusnia@unib.ac.id',
                'NomorNIP' => '199201022022032009',
            ],
            [
                'name' => 'Yuli Amaliyah, S.Pd., M.Pd.',
                'NIP' => 'yuliamaliyah@unib.ac.id',
                'NomorNIP' => '198910302023212042',
            ],
        ];

        foreach ($dosens as $key => $val) {
            Dosen::create($val);
        }


        $mahasiswas = [
            [
                'name' => 'Fakhri',
                'NPM' => 'G1A021050',
            ],
        ];
        foreach ($mahasiswas as $key => $val) {
            Mahasiswa::create($val);
        }

        $pembimbings = [
            [
                'mahasiswa_id' => '1',
                'dosen1_id' => '1',
                'dosen2_id'=> '2',
            ],
        ];
        foreach ($pembimbings as $key => $val) {
            Pembimbing::create($val);
        }
    }
}
