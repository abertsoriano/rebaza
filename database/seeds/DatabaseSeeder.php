<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('LawyerTableSeeder');
	}

}


class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(['name' => 'Admin Rebaza', 'password' => bcrypt('admin'), 'email' => 'admin@rebaza.com']);
    }
}

class LawyerTableSeeder extends Seeder {

    public function run()
    {
        $insert = [
            'name' => 'Alberto Rebaza',
            'email' => 'alberto.rebaza@rebaza-alcazar.com',
            'image' => 'alberto.jpg',

            'download_cv_es' => 'ARTCVes.pdf',
            'download_cv_en' => 'ARTen2015.pdf',

            'download_txt_es' => 'Descargar',
            'download_txt_en' => 'Download',

            'job_es' => 'Socio Principal',
            'job_en' => 'Primary Partner',
            'type' => 1,

            'list_es' => '[{"list":"\u00c1reas","items_es":["<a href=\"http:\/\/www.rebaza-alcazar.com\/areafunciones\">Fusiones y Adquisiciones<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areamercado\">Mercado de Valores<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/arealibre\">Libre Competencia y Competencia Desleal<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areacorporativo\">Corporativo<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areaprivate\">Private Clients<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areaventure\">Venture Capital<\/a>"]},{"list":"Educaci\u00f3n","items_es":["Abogado por la Pontificia Universidad Cat\u00f3lica del Per\u00fa, 1993. Summa Cum Laude.","Master en Derecho por University of Virginia School of Law (EEUU), 1995."]},{"list":"Distinciones","items_es":["Director de Amrop Per\u00fa S.A.C., Angel Ventures y Rigel Per\u00fa S.A.","Miembro del Patronato del Museo de Lima","Miembro del Comit\u00e9 de Adquisiciones de Arte del Museo de Arte de Lima (MALI)","Miembro Young President\u2019s Organization (YPO).","Mentor de Wayra","Chambers & Partners - Fusiones y Adquisiciones: Banda 1 - Derecho Bancario y Financiero: Banda 2","\u00c1rbitro, C\u00e1mara de Comercio de Lima","\u00c1rbitro, Centro de Arbitraje de la Pontificia Universidad Cat\u00f3lica (PUCP)","\u00c1rbitro, American Chamber of Commerce (AMCHAM)","akjhvdhas"]},{"list":"Idiomas","items_es":["Espa\u00f1ol e Ingl\u00e9s"]}]',
            'list_en' => '[{"list":"Practiques","items_en":["<a href=\"http:\/\/www.rebaza-alcazar.com\/areafunciones\">Mergers and Acquisitions<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areamercado\">Capital Markets<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/arealibre\">Free and unfair competition<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areacorporativo\">Corporate<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areaprivate\">Private Clients<\/a>","<a href=\"http:\/\/www.rebaza-alcazar.com\/areaventure\">Venture Capital<\/a>"]},{"list":"Educaci\u00f3n","items_en":["Abogado por la Pontificia Universidad Cat\u00f3lica del Per\u00fa, 1993. Summa Cum Laude.","Master en Derecho por University of Virginia School of Law (EEUU), 1995."]},{"list":"Distinctions","items_en":["Director de Amrop Per\u00fa S.A.C., Angel Ventures y Rigel Per\u00fa S.A.","Miembro del Patronato del Museo de Lima","Miembro del Comit\u00e9 de Adquisiciones de Arte del Museo de Arte de Lima (MALI)","Miembro Young President\u2019s Organization (YPO).","Mentor de Wayra","Chambers & Partners - Mergers and Acquisitions: Banda 1 - Derecho Bancario y Financiero: Banda 2","\u00c1rbitro, C\u00e1mara de Comercio de Lima","\u00c1rbitro, Centro de Arbitraje de la Pontificia Universidad Cat\u00f3lica (PUCP)","\u00c1rbitro, American Chamber of Commerce (AMCHAM)"]},{"list":"Languages","items_en":["Spanish and English"]}]',

            'info_es' => "<p class=\"txtblue text-bold\" style=\"box-sizing: border-box; margin: 11px 0px 0px; color: #36a9e1; font-weight: bold; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif;\">Oficina de Lima</p><p class=\"sinespacio\" style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">T: 4425100<br style=\"box-sizing: border-box;\" />F: 4425100 A: 224<br style=\"box-sizing: border-box;\" /><a class=\"correo\" style=\"box-sizing: border-box; background-color: transparent; color: #474747; text-decoration-line: none;\" href=\"mailto:alberto.rebaza@rebaza-alcazar.com\">alberto.rebaza@rebaza-alcazar.com</a></p><p class=\"txtblue text-bold\" style=\"box-sizing: border-box; margin: 11px 0px 0px; color: #36a9e1; font-weight: bold; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif;\">Secretaria</p><p class=\"sinespacio\" style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Rocio Paredes<br style=\"box-sizing: border-box;\" /><a class=\"correo\" style=\"box-sizing: border-box; background-color: transparent; color: #474747; text-decoration-line: none;\" href=\"mailto:rocio.paredes@rebaza-alcazar.com\">rocio.paredes@rebaza-alcazar.com</a><br style=\"box-sizing: border-box;\" />T: 4425100 A: 224</p>",
            'info_en' => "<p class=\"txtblue text-bold\" style=\"box-sizing: border-box; margin: 11px 0px 0px; color: #36a9e1; font-weight: bold; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif;\">Lima Office</p>\r\n<p class=\"sinespacio\" style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">T: 4425100<br style=\"box-sizing: border-box;\" />F: 4425100 A: 224<br style=\"box-sizing: border-box;\" /><a class=\"correo\" style=\"box-sizing: border-box; background-color: transparent; color: #474747; text-decoration-line: none;\" href=\"mailto:alberto.rebaza@rebaza-alcazar.com\">alberto.rebaza@rebaza-alcazar.com</a></p>\r\n<p class=\"txtblue text-bold\" style=\"box-sizing: border-box; margin: 11px 0px 0px; color: #36a9e1; font-weight: bold; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif;\">Secretary</p>\r\n<p class=\"sinespacio\" style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Rocio Paredes<br style=\"box-sizing: border-box;\" /><a class=\"correo\" style=\"box-sizing: border-box; background-color: transparent; color: #474747; text-decoration-line: none;\" href=\"mailto:rocio.paredes@rebaza-alcazar.com\">rocio.paredes@rebaza-alcazar.com</a><br style=\"box-sizing: border-box;\" />T: 4425100 A: 224</p>",

            'text_es' => "<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Alberto Rebaza es socio fundador y managing partner de Rebaza, Alc&aacute;zar &amp; De Las Casas. Socio lider del &aacute;rea de fusiones y adquisiciones y de finanzas corporativas. En adici&oacute;n a su maestr&iacute;a, cuenta con estudios en Georgetown University y en Inglaterra.</p>\r\n<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Alberto ha sido permanentemente considerado por los principales rankings legales como abogado l&iacute;der en M&amp;A y Banca y Financiamiento. Estas publicaciones incluyen a Chambers &amp; Partners, IFRL 1000, Who&acute;s Who Legal y Latin Lawyer entre otras. Latin Lawyer incluy&oacute; a Alberto en el 2004 en su \"Top 20 menores de 40\" lista de los abogados menores de 40 a&ntilde;os que gozan del m&aacute;s alto reconocimiento. A su vez Chambers &amp; Partners lo consider&oacute; &ldquo;como la voz l&iacute;der para las grandes transacciones financieras y M&amp;A&rdquo;.</p>\r\n<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Ha sido expositor en diferentes conferencias de International Bar Association &ndash; IBA en Dublin, San Paulo, Bogot&aacute;, Panam&aacute;; Latin Laywer en Barcelona, NYC, M&eacute;xico, Bogot&aacute;, Dublin, Singapur.</p>\r\n<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Muy involucrado en el mundo de las artes; Alberto es miembro del patronato del Museo de Arte de Lima, y presidente del Comit&eacute; de Adquisiciones de Arte Contempor&aacute;neo (CAAC MALI) y Artecho.</p>",
            'text_en' => "<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Alberto Rebaza is founding partner and managing partner of Rebaza, Alcazar &amp; De Las Casas law firm. Partner leads to mergers and acquisitions and corporate areas. In addition to his masters, he has studies at Georgetown University and England.</p>\r\n<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Alberto has been consistently considered by legal rankings as a leading lawyer in M&amp;A, Banking and Finance. These publications include Chambers &amp; Partners, IFRL 1000, Who\'s Who Legal and LatinLawyer, among others. LatinLawyer included Alberto in 2004 in its \"Top 20 under 40\" list of lawyers under 40 who enjoy the highest recognition. Also, Chambers &amp; Partners called him \"as the leading voice for large financial transactions and M&amp;A\".</p>\r\n<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">He has been a speaker at different conferences of the International Bar Association &ndash; IBA in Dublin, San Paulo, Bogot&aacute;, Panam&aacute;; LatinLaywer in Barcelona, NYC, M&eacute;xico, Bogota, Dublin, Singapur.</p>\r\n<p style=\"box-sizing: border-box; margin: 11px 0px 0px; text-align: justify; padding: 0px; font-size: 11px; line-height: 1.6; font-family: Verdana, Geneva, sans-serif; color: #111111;\">Very much involved in the arts world, Alberto is a board member of the Museum of Art of Lima, and is chair of the Acquisition Committee of Contemporary Art (CAAC MALI) and Artecho.</p>"
        ];

        \App\Lawyer::create($insert);
    }
}