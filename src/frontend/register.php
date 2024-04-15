<?php
$title = "Register";
$css_files = array(
    "css/register.css",
    "https://use.fontawesome.com/releases/v5.7.1/css/all.css",
);
include "header.php";
?>

<body>
    <div class="register">
        <h1>Register</h1>
        <form action="authenticate.php" method="post" autocomplete="off">
            <div class="form-group names">
                <div class="input-group">
                    <label for="title"><i class="fas fa-user"></i></label>
                    <select name="title" id="title" required>
                        <option value="none">Title</option>
                        <option value="dr">Dr.</option>
                        <option value="prof">Prof.</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="text" name="otherInput" id="otherInput" placeholder="Other Title" class="hidden">
                    <script>
                        document.getElementById("title").addEventListener("change", function() {
                            if (this.value === "other") {
                                document.getElementById("otherInput").classList.remove("hidden");
                            } else {
                                document.getElementById("otherInput").classList.add("hidden");
                            }
                        });
                    </script>
                </div>
                <div class="input-group">
                    <label for="vorname"><i class="fas fa-user"></i></label>
                    <input type="text" name="vorname" id="vorname" placeholder="First Name" required>
                </div>
                <div class="input-group">
                    <label for="nachname"><i class="fas fa-user"></i></label>
                    <input type="text" name="nachname" id="nachname" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group infos">
                <div class="input-group">
                    <label for="geburtsdatum"><i class="fas fa-calendar-alt"></i></label>
                    <input type="date" name="geburtsdatum" id="geburtsdatum" required>
                </div>
                <div class="input-group">
                    <label for="gender"><i class="fas fa-venus-mars"></i></label>
                    <select name="gender" id="genderSelect" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="text" name="otherGender" id="otherGenderInput" placeholder="Other Gender" class="hidden">
                    <script>
                        document.getElementById("genderSelect").addEventListener("change", function() {
                            if (this.value === "other") {
                                document.getElementById("otherGenderInput").classList.remove("hidden");
                            } else {
                                document.getElementById("otherGenderInput").classList.add("hidden");
                            }
                        });
                    </script>
                </div>
                <div class="input-group">
                    <label for="nationality"><i class="fas fa-globe"></i></label>
                    <select name="nationality">
                        <option value="">Nationality</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                </div>
            </div>

            <div class="form-group personalInformation">
                <div class="input-group">
                    <label for="telefonnummer"><i class="fas fa-phone"></i></label>
                    <select name="vorwahl" id="vorwahl">
                        <option value="20">+20 Aegypten</option>
                        <option value="240">+240 Aequatorialguinea</option>
                        <option value="251">+251 Aethiopien</option>
                        <option value="355">+355 Albanien</option>
                        <option value="213">+213 Algerien</option>
                        <option value="684">+684 Amerikanisch-Samoa</option>
                        <option value="1809">+1809 Amerikanische Jungferninseln</option>
                        <option value="376">+376 Andorra</option>
                        <option value="244">+244 Angola</option>
                        <option value="1809">+1809 Anguilla</option>
                        <option value="67212">+67212 Antarktis Casey</option>
                        <option value="67213">+67213 Antarktis Macquarrie Island</option>
                        <option value="67210">+67210 Antarktis Davis</option>
                        <option value="67211">+67211 Antarktis Mawson</option>
                        <option value="1809">+1809 Antigua und Barbuda</option>
                        <option value="54">+54 Argentinien</option>
                        <option value="374">+374 Armenien</option>
                        <option value="297">+297 Aruba</option>
                        <option value="247">+247 Ascension</option>
                        <option value="871">+871 Atlantischer Ozean (Ost)</option>
                        <option value="874">+874 Atlantischer Ozean (West)</option>
                        <option value="61">+61 Australien</option>
                        <option value="6723">+6723 Australien Norfolkinsel</option>
                        <option value="6724">+6724 Australien Weihnachtsinsel</option>
                        <option value="1809">+1809 Bahamas</option>
                        <option value="973">+973 Bahrain</option>
                        <option value="880">+880 Bangladesch</option>
                        <option value="1809">+1809 Barbados</option>
                        <option value="32">+32 Belgien</option>
                        <option value="501">+501 Belize</option>
                        <option value="229">+229 Benin</option>
                        <option value="1809">+1809 Bermuda</option>
                        <option value="975">+975 Bhutan</option>
                        <option value="95">+95 Birma</option>
                        <option value="591">+591 Bolivien</option>
                        <option value="387">+387 Bosnien-Herzegowina</option>
                        <option value="267">+267 Botsuana</option>
                        <option value="55">+55 Brasilien</option>
                        <option value="1809">+1809 Britische Jungferninseln</option>
                        <option value="673">+673 Brunei</option>
                        <option value="359">+359 Bulgarien</option>
                        <option value="226">+226 Burkina Faso</option>
                        <option value="257">+257 Burundi</option>
                        <option value="56">+56 Chile</option>
                        <option value="886">+886 China (Taiwan)</option>
                        <option value="86">+86 China (Volksrepublik)</option>
                        <option value="682">+682 Cookinseln</option>
                        <option value="506">+506 Costa Rica</option>
                        <option value="45">+45 Daenemark</option>
                        <option value="49" selected>+49 Deutschland</option>
                        <option value="246">+246 Diego Garcia</option>
                        <option value="1809">+1809 Dominica</option>
                        <option value="1809">+1809 Dominikanische Republik</option>
                        <option value="253">+253 Dschibuti</option>
                        <option value="593">+593 Ecuador</option>
                        <option value="225">+225 Elfenbeinkueste</option>
                        <option value="503">+503 El Salvador</option>
                        <option value="291">+291 Eritrea</option>
                        <option value="372">+372 Estland</option>
                        <option value="298">+298 Faeroeer</option>
                        <option value="500">+500 Falklandinseln</option>
                        <option value="679">+679 Fidschi</option>
                        <option value="358">+358 Finnland</option>
                        <option value="33">+33 Frankreich</option>
                        <option value="594">+594 Franzoesisch-Guayana</option>
                        <option value="689">+689 Franzoesisch-Polynesien</option>
                        <option value="241">+241 Gabun</option>
                        <option value="220">+220 Gambia</option>
                        <option value="233">+233 Ghana</option>
                        <option value="350">+350 Gibraltar</option>
                        <option value="1809">+1809 Grenada</option>
                        <option value="30">+30 Griechenland</option>
                        <option value="299">+299 Groenland</option>
                        <option value="44">+44 Grossbritannien</option>
                        <option value="590">+590 Guadeloupe</option>
                        <option value="671">+671 Guam</option>
                        <option value="502">+502 Guatemala</option>
                        <option value="224">+224 Guinea</option>
                        <option value="245">+245 Guinea-Bissau</option>
                        <option value="7">+7 GUS</option>
                        <option value="592">+592 Guyana</option>
                        <option value="509">+509 Haiti</option>
                        <option value="504">+504 Honduras</option>
                        <option value="852">+852 Hongkong</option>
                        <option value="91">+91 Indien</option>
                        <option value="873">+873 Indischer Ozean</option>
                        <option value="62">+62 Indonesien</option>
                        <option value="44">+44 Insel Man</option>
                        <option value="964">+964 Irak</option>
                        <option value="98">+98 Iran</option>
                        <option value="353">+353 Irland</option>
                        <option value="534">+534 Island</option>
                        <option value="972">+972 Israel</option>
                        <option value="39">+39 Italien</option>
                        <option value="1876">+1876 Jamaika</option>
                        <option value="81">+81 Japan</option>
                        <option value="967">+967 Jemen (Arabische Republik)</option>
                        <option value="962">+962 Jordanien</option>
                        <option value="1809">+1809 Kaimaninseln</option>
                        <option value="855">+855 Kambodscha</option>
                        <option value="237">+237 Kamerun</option>
                        <option value="1">+1 Kanada</option>
                        <option value="44">+44 Kanalinseln</option>
                        <option value="238">+238 Kap Verde</option>
                        <option value="974">+974 Katar</option>
                        <option value="254">+254 Kenia</option>
                        <option value="686">+686 Kiribati</option>
                        <option value="57">+57 Kolumbien</option>
                        <option value="242">+242 Kongo</option>
                        <option value="850">+850 Korea (Demokratische Republik)</option>
                        <option value="82">+82 Korea (Republik)</option>
                        <option value="385">+385 Kroatien</option>
                        <option value="53">+53 Kuba</option>
                        <option value="965">+965 Kuwait</option>
                        <option value="856">+856 Laos</option>
                        <option value="266">+266 Lesotho</option>
                        <option value="371">+371 Lettland</option>
                        <option value="961">+961 Libanon</option>
                        <option value="231">+231 Liberia</option>
                        <option value="218">+218 Libyen (Lib.-Arabische-Dscham.)</option>
                        <option value="423">+423 Liechtenstein</option>
                        <option value="370">+370 Litauen</option>
                        <option value="352">+352 Luxemburg</option>
                        <option value="853">+853 Macau</option>
                        <option value="261">+261 Madagaskar</option>
                        <option value="265">+265 Malawi</option>
                        <option value="60">+60 Malaysia</option>
                        <option value="960">+960 Malediven</option>
                        <option value="223">+223 Mali</option>
                        <option value="536">+536 Malta</option>
                        <option value="670">+670 Marianen</option>
                        <option value="212">+212 Marokko</option>
                        <option value="692">+692 Marshallinseln</option>
                        <option value="596">+596 Martinique</option>
                        <option value="222">+222 Mauretanien</option>
                        <option value="230">+230 Mauritius</option>
                        <option value="269">+269 Mayotte</option>
                        <option value="389">+389 Mazedonien</option>
                        <option value="52">+52 Mexiko</option>
                        <option value="691">+691 Mikronesien</option>
                        <option value="3393">+3393 Monaco</option>
                        <option value="976">+976 Mongolei</option>
                        <option value="1809">+1809 Montserrat</option>
                        <option value="258">+258 Mosambik</option>
                        <option value="264">+264 Namibia</option>
                        <option value="674">+674 Nauru</option>
                        <option value="977">+977 Nepal</option>
                        <option value="687">+687 Neukaledonien</option>
                        <option value="64">+64 Neuseeland</option>
                        <option value="505">+505 Nicaragua</option>
                        <option value="599">+599 Niederlaendische Antillen</option>
                        <option value="31">+31 Niederlande</option>
                        <option value="227">+227 Niger</option>
                        <option value="234">+234 Nigeria</option>
                        <option value="683">+683 Niue-Inseln</option>
                        <option value="44">+44 Nordirland</option>
                        <option value="47">+47 Norwegen</option>
                        <option value="226">+226 Obervolta</option>
                        <option value="43">+43 Oesterreich</option>
                        <option value="968">+968 Oman</option>
                        <option value="92">+92 Pakistan</option>
                        <option value="680">+680 Palau</option>
                        <option value="507">+507 Panama</option>
                        <option value="675">+675 Papua-Neuguinea</option>
                        <option value="595">+595 Paraguay</option>
                        <option value="872">+872 Pazifischer Ozean</option>
                        <option value="51">+51 Peru</option>
                        <option value="63">+63 Philippinen</option>
                        <option value="48">+48 Polen</option>
                        <option value="351">+351 Portugal</option>
                        <option value="1809">+1809 Puerto Rico</option>
                        <option value="262">+262 Reunion</option>
                        <option value="250">+250 Ruanda</option>
                        <option value="40">+40 Rumaenien</option>
                        <option value="677">+677 Salomonen</option>
                        <option value="260">+260 Sambia</option>
                        <option value="685">+685 Samoa</option>
                        <option value="378">+378 San Marino</option>
                        <option value="259">+259 Sansibar</option>
                        <option value="239">+239 Sao Tome und Principe</option>
                        <option value="966">+966 Saudi Arabien</option>
                        <option value="46">+46 Schweden</option>
                        <option value="41">+41 Schweiz</option>
                        <option value="221">+221 Senegal</option>
                        <option value="381">+381 Serbien und Montenegro</option>
                        <option value="248">+248 Seschellen</option>
                        <option value="232">+232 Sierra Leone</option>
                        <option value="263">+263 Simbabwe</option>
                        <option value="65">+65 Singapur</option>
                        <option value="42">+42 Slowakei</option>
                        <option value="386">+386 Slowenien</option>
                        <option value="252">+252 Somalia</option>
                        <option value="34">+34 Spanien</option>
                        <option value="94">+94 Sri Lanka</option>
                        <option value="1809">+1809 St. Christoph und Nevis</option>
                        <option value="290">+290 St. Helena</option>
                        <option value="1809">+1809 St. Lucia</option>
                        <option value="508">+508 St. Pierra und Miquelon</option>
                        <option value="1809">+1809 St. Vincent und die Grenadien</option>
                        <option value="249">+249 Sudan</option>
                        <option value="27">+27 Suedafrika</option>
                        <option value="597">+597 Suriname</option>
                        <option value="268">+268 Swasiland</option>
                        <option value="963" +963 8>Syrien</option>
                        <option value="255">+255 Tansania</option>
                        <option value="66">+66 Thailand</option>
                        <option value="228">+228 Togo</option>
                        <option value="690">+690 Tokelan</option>
                        <option value="676">+676 Tonga</option>
                        <option value="1809">+1809 Trinidad und Tobago</option>
                        <option value="235">+235 Tschad</option>
                        <option value="42">+42 Tschechien</option>
                        <option value="90">+90 Tuerkei</option>
                        <option value="216">+216 Tunesien</option>
                        <option value="1809">+1809 Turks- und Caicos-Inseln</option>
                        <option value="688">+688 Tuvalu</option>
                        <option value="256">+256 Uganda</option>
                        <option value="380">+380 Ukraine</option>
                        <option value="36">+36 Ungarn</option>
                        <option value="598">+598 Uruguay</option>
                        <option value="678">+678 Vanuatu</option>
                        <option value="396">+396 Vatikanstadt</option>
                        <option value="58">+58 Venezuela</option>
                        <option value="971">+971 Vereinigte Arabische Emirate</option>
                        <option value="1">+1 Vereinigte Staaten (USA)</option>
                        <option value="84">+84 Vietnam</option>
                        <option value="681">+681 Wallis und Futuna</option>
                        <option value="243">+243 Zaire</option>
                        <option value="236">+236 Zentralafrikanische Republik</option>
                        <option value="357">+357 Zypern</option>
                    </select>
                    <input type="tel" name="telefonnummer" id="telefonnummer" placeholder="Phone Number" required>
                </div>
                <div class="input-group">
                    <label for="strasse"><i class="fas fa-map-marker-alt"></i></label>
                    <input type="text" name="strasse" id="strasse" placeholder="Street Address" required>
                </div>
                <div class="input-group">
                    <label for="ort"><i class="fas fa-city"></i></label>
                    <input type="text" name="ort" id="ort" placeholder="City" required>
                </div>
                <div class="input-group">
                    <label for="plz"><i class="fas fa-mail-bulk"></i></label>
                    <input type="text" name="plz" id="plz" placeholder="Postal Code" required>
                </div>
                <div class="input-group">
                    <label for="land"><i class="fas fa-globe"></i></label>
                    <input type="text" name="land" id="land" placeholder="Country" required>
                </div>
                <div class="input-group">
                    <label for="email"><i class="fas fa-envelope"></i></label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <label for="username"><i class="fas fa-user"></i></label>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="password"><i class="fas fa-lock"></i></label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
            </div>

            <input type="submit" name="register" value="Register">
        </form>
        
        <p>Already have an account? <a href="login.php">Login</a></p>
        <div class="logo"></div>
    </div>
    <script src="js/register.js"></script>
</body>

</html>