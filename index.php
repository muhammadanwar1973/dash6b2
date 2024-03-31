<!--Head Section Start-->
<?php
  include('layout/head.php');
?>
<!--Head Section End-->

<body class="">
  <!--Navigation Start-->
  <?php
      include('layout/navmenue.php');
   ?>
   <!--Navigation End-->
  <!--Header Start-->
  <?php
      include('layout/header.php');
   ?>
   <!--Header End-->

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
<div style="margin-top: 0px;" class="pcoded-content">
<!--Candidate Basic Info form start-->
<div class="row">
  <div class="col-sm-12">
  <form id="validation-form123" action="#">
      <div class="card">
          <div class="card-header bg-light">
              <h5>CANDIDATE REGISTRATION FORM</h5>
          </div>
          <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="form-label">Applicant's Full Name </label>
                          <input type="text" class="form-control" id="validation-name" placeholder="Applicant's Full Name " required>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="form-label">Father/Husband’s Name </label>
                          <input type="text" class="form-control" id="validation-fname" placeholder="Father/Husband’s Name " required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">CNIC Number  </label>
                          <input type="tel" class="form-control" id="validation-cnic" placeholder="CNIC Number "  max="13" required >
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Mobile No  </label>
                          <input type="text" class="form-control" id="validation-mobile" placeholder="Mobile No " required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" id="validation-email" placeholder="Email" required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Date of Birth  </label>
                          <input type="date" class="form-control" id="Extend" placeholder="123" required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Gender </label>
                          <select class="form-control" id="validation-gender" required="required">
                              <option value="" disabled selected>Select Gender</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group fill">
                          <label class="form-label">Telephone (Res)  </label>
                          <input type="text" class="form-control" id="validation-telephoner" placeholder="Telephone (Res) " required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Telephone (off)  </label>
                          <input type="text" class="form-control" id="validation-telephoneof" placeholder="Telephone (Off) " required>
                      </div>
                  </div>
                  <hr class="col-md-12">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Province </label>
                          <select class="form-control" id="select-country23" required="required">
                              <option value="" disabled selected>Select Province</option>
                              <option>Azad Jammu and Kashmir</option>
                              <option>Balochistan</option>
                              <option>Gilgit-Baltistan</option>
                              <option>Islamabad</option>
                              <option>Khyber Pakhtunkhwa</option>
                              <option>Punjab</option>
                              <option>Sindh</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">City </label>
                          <select class="form-control" id="select-city" required="required">
                            <option>Karachi</option>
                            <option>Lahore</option>
                            <option>Faisalabad</option>
                            <option>Rawalpindi</option>
                            <option>Gujranwala</option>
                            <option>Peshawar</option>
                            <option>Multan</option>
                            <option>Saidu Sharif</option>
                            <option>Hyderabad City</option>
                            <option>Islamabad</option>
                            <option>Quetta</option>
                            <option>Bahawalpur</option>
                            <option>Sargodha</option>
                            <option>Sialkot City</option>
                            <option>Sukkur</option>
                            <option>Larkana</option>
                            <option>Chiniot</option>
                            <option>Shekhupura</option>
                            <option>Jhang City</option>
                            <option>Dera Ghazi Khan</option>
                            <option>Gujrat</option>
                            <option>Rahimyar Khan</option>
                            <option>Kasur</option>
                            <option>Mardan</option>
                            <option>Mingaora</option>
                            <option>Nawabshah</option>
                            <option>Sahiwal</option>
                            <option>Mirpur Khas</option>
                            <option>Okara</option>
                            <option>Mandi Burewala</option>
                            <option>Jacobabad</option>
                            <option>Saddiqabad</option>
                            <option>Kohat</option>
                            <option>Muridke</option>
                            <option>Muzaffargarh</option>
                            <option>Khanpur</option>
                            <option>Gojra</option>
                            <option>Mandi Bahauddin</option>
                            <option>Abbottabad</option>
                            <option>Turbat</option>
                            <option>Dadu</option>
                            <option>Bahawalnagar</option>
                            <option>Khuzdar</option>
                            <option>Pakpattan</option>
                            <option>Tando Allahyar</option>
                            <option>Ahmadpur East</option>
                            <option>Vihari</option>
                            <option>Jaranwala</option>
                            <option>New Mirpur</option>
                            <option>Kamalia</option>
                            <option>Kot Addu</option>
                            <option>Nowshera</option>
                            <option>Swabi</option>
                            <option>Khushab</option>
                            <option>Dera Ismail Khan</option>
                            <option>Chaman</option>
                            <option>Charsadda</option>
                            <option>Kandhkot</option>
                            <option>Chishtian</option>
                            <option>Hasilpur</option>
                            <option>Attock Khurd</option>
                            <option>Muzaffarabad</option>
                            <option>Mianwali</option>
                            <option>Jalalpur Jattan</option>
                            <option>Bhakkar</option>
                            <option>Zhob</option>
                            <option>Dipalpur</option>
                            <option>Kharian</option>
                            <option>Mian Channun</option>
                            <option>Bhalwal</option>
                            <option>Jamshoro</option>
                            <option>Pattoki</option>
                            <option>Harunabad</option>
                            <option>Kahror Pakka</option>
                            <option>Toba Tek Singh</option>
                            <option>Samundri</option>
                            <option>Shakargarh</option>
                            <option>Sambrial</option>
                            <option>Shujaabad</option>
                            <option>Hujra Shah Muqim</option>
                            <option>Kabirwala</option>
                            <option>Mansehra</option>
                            <option>Lala Musa</option>
                            <option>Chunian</option>
                            <option>Nankana Sahib</option>
                            <option>Bannu</option>
                            <option>Pasrur</option>
                            <option>Timargara</option>
                            <option>Parachinar</option>
                            <option>Chenab Nagar</option>
                            <option>Gwadar</option>
                            <option>Abdul Hakim</option>
                            <option>Hassan Abdal</option>
                            <option>Tank</option>
                            <option>Hangu</option>
                            <option>Risalpur Cantonment</option>
                            <option>Karak</option>
                            <option>Kundian</option>
                            <option>Umarkot</option>
                            <option>Chitral</option>
                            <option>Dainyor</option>
                            <option>Kulachi</option>
                            <option>Kalat</option>
                            <option>Kotli</option>
                            <option>Gilgit</option>
                            <option>Narowal</option>
                            <option>Khairpur Mir’s</option>
                            <option>Khanewal</option>
                            <option>Jhelum</option>
                            <option>Haripur</option>
                            <option>Shikarpur</option>
                            <option>Rawala Kot</option>
                            <option>Hafizabad</option>
                            <option>Lodhran</option>
                            <option>Malakand</option>
                            <option>Attock City</option>
                            <option>Batgram</option>
                            <option>Matiari</option>
                            <option>Ghotki</option>
                            <option>Naushahro Firoz</option>
                            <option>Alpurai</option>
                            <option>Bagh</option>
                            <option>Daggar</option>
                            <option>Leiah</option>
                            <option>Tando Muhammad Khan</option>
                            <option>Chakwal</option>
                            <option>Badin</option>
                            <option>Lakki</option>
                            <option>Rajanpur</option>
                            <option>Dera Allahyar</option>
                            <option>Shahdad Kot</option>
                            <option>Pishin</option>
                            <option>Sanghar</option>
                            <option>Upper Dir</option>
                            <option>Thatta</option>
                            <option>Dera Murad Jamali</option>
                            <option>Kohlu</option>
                            <option>Mastung</option>
                            <option>Dasu</option>
                            <option>Athmuqam</option>
                            <option>Loralai</option>
                            <option>Barkhan</option>
                            <option>Musa Khel Bazar</option>
                            <option>Ziarat</option>
                            <option>Gandava</option>
                            <option>Sibi</option>
                            <option>Dera Bugti</option>
                            <option>Eidgah</option>
                            <option>Uthal</option>
                            <option>Khuzdar</option>
                            <option>Chilas</option>
                            <option>Panjgur</option>
                            <option>Gakuch</option>
                            <option>Qila Saifullah</option>
                            <option>Kharan</option>
                            <option>Aliabad</option>
                            <option>Awaran</option>
                            <option>Dalbandin</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">District </label>
                          <select class="form-control" id="select-district" required="required">
                              <option value="" disabled selected>Select Province</option>
                              <option>Azad Jammu and Kashmir</option>
                              <option>Balochistan</option>
                              <option>Gilgit-Baltistan</option>
                              <option>Islamabad</option>
                              <option>Khyber Pakhtunkhwa</option>
                              <option>Punjab</option>
                              <option>Sindh</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Area </label>
                          <select class="form-control" id="select-city" required="required">
                            <option value="" disabled selected>Select Area</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="" disabled>Punjab Cities</option>
                            <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                            <option value="Ahmadpur East">Ahmadpur East</option>
                            <option value="Ali Khan Abad">Ali Khan Abad</option>
                            <option value="Alipur">Alipur</option>
                            <option value="Arifwala">Arifwala</option>
                            <option value="Attock">Attock</option>
                            <option value="Bhera">Bhera</option>
                            <option value="Bhalwal">Bhalwal</option>
                            <option value="Bahawalnagar">Bahawalnagar</option>
                            <option value="Bahawalpur">Bahawalpur</option>
                            <option value="Bhakkar">Bhakkar</option>
                            <option value="Burewala">Burewala</option>
                            <option value="Chillianwala">Chillianwala</option>
                            <option value="Chakwal">Chakwal</option>
                            <option value="Chichawatni">Chichawatni</option>
                            <option value="Chiniot">Chiniot</option>
                            <option value="Chishtian">Chishtian</option>
                            <option value="Daska">Daska</option>
                            <option value="Darya Khan">Darya Khan</option>
                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                            <option value="Dhaular">Dhaular</option>
                            <option value="Dina">Dina</option>
                            <option value="Dinga">Dinga</option>
                            <option value="Dipalpur">Dipalpur</option>
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Ferozewala">Ferozewala</option>
                            <option value="Fateh Jhang">Fateh Jang</option>
                            <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                            <option value="Gojra">Gojra</option>
                            <option value="Gujranwala">Gujranwala</option>
                            <option value="Gujrat">Gujrat</option>
                            <option value="Gujar Khan">Gujar Khan</option>
                            <option value="Hafizabad">Hafizabad</option>
                            <option value="Haroonabad">Haroonabad</option>
                            <option value="Hasilpur">Hasilpur</option>
                            <option value="Haveli Lakha">Haveli Lakha</option>
                            <option value="Jatoi">Jatoi</option>
                            <option value="Jalalpur">Jalalpur</option>
                            <option value="Jattan">Jattan</option>
                            <option value="Jampur">Jampur</option>
                            <option value="Jaranwala">Jaranwala</option>
                            <option value="Jhang">Jhang</option>
                            <option value="Jhelum">Jhelum</option>
                            <option value="Kalabagh">Kalabagh</option>
                            <option value="Karor Lal Esan">Karor Lal Esan</option>
                            <option value="Kasur">Kasur</option>
                            <option value="Kamalia">Kamalia</option>
                            <option value="Kamoke">Kamoke</option>
                            <option value="Khanewal">Khanewal</option>
                            <option value="Khanpur">Khanpur</option>
                            <option value="Kharian">Kharian</option>
                            <option value="Khushab">Khushab</option>
                            <option value="Kot Addu">Kot Addu</option>
                            <option value="Jauharabad">Jauharabad</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Lalamusa">Lalamusa</option>
                            <option value="Layyah">Layyah</option>
                            <option value="Liaquat Pur">Liaquat Pur</option>
                            <option value="Lodhran">Lodhran</option>
                            <option value="Malakwal">Malakwal</option>
                            <option value="Mamoori">Mamoori</option>
                            <option value="Mailsi">Mailsi</option>
                            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                            <option value="Mian Channu">Mian Channu</option>
                            <option value="Mianwali">Mianwali</option>
                            <option value="Multan">Multan</option>
                            <option value="Murree">Murree</option>
                            <option value="Muridke">Muridke</option>
                            <option value="Mianwali Bangla">Mianwali Bangla</option>
                            <option value="Muzaffargarh">Muzaffargarh</option>
                            <option value="Narowal">Narowal</option>
                            <option value="Nankana Sahib">Nankana Sahib</option>
                            <option value="Okara">Okara</option>
                            <option value="Renala Khurd">Renala Khurd</option>
                            <option value="Pakpattan">Pakpattan</option>
                            <option value="Pattoki">Pattoki</option>
                            <option value="Pir Mahal">Pir Mahal</option>
                            <option value="Qaimpur">Qaimpur</option>
                            <option value="Qila Didar Singh">Qila Didar Singh</option>
                            <option value="Rabwah">Rabwah</option>
                            <option value="Raiwind">Raiwind</option>
                            <option value="Rajanpur">Rajanpur</option>
                            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                            <option value="Sadiqabad">Sadiqabad</option>
                            <option value="Safdarabad">Safdarabad</option>
                            <option value="Sahiwal">Sahiwal</option>
                            <option value="Sangla Hill">Sangla Hill</option>
                            <option value="Sarai Alamgir">Sarai Alamgir</option>
                            <option value="Sargodha">Sargodha</option>
                            <option value="Shakargarh">Shakargarh</option>
                            <option value="Sheikhupura">Sheikhupura</option>
                            <option value="Sialkot">Sialkot</option>
                            <option value="Sohawa">Sohawa</option>
                            <option value="Soianwala">Soianwala</option>
                            <option value="Siranwali">Siranwali</option>
                            <option value="Talagang">Talagang</option>
                            <option value="Taxila">Taxila</option>
                            <option value="Toba Tek Singh">Toba Tek Singh</option>
                            <option value="Vehari">Vehari</option>
                            <option value="Wah Cantonment">Wah Cantonment</option>
                            <option value="Wazirabad">Wazirabad</option>
                            <option value="" disabled>Sindh Cities</option>
                            <option value="Badin">Badin</option>
                            <option value="Bhirkan">Bhirkan</option>
                            <option value="Rajo Khanani">Rajo Khanani</option>
                            <option value="Chak">Chak</option>
                            <option value="Dadu">Dadu</option>
                            <option value="Digri">Digri</option>
                            <option value="Diplo">Diplo</option>
                            <option value="Dokri">Dokri</option>
                            <option value="Ghotki">Ghotki</option>
                            <option value="Haala">Haala</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Islamkot">Islamkot</option>
                            <option value="Jacobabad">Jacobabad</option>
                            <option value="Jamshoro">Jamshoro</option>
                            <option value="Jungshahi">Jungshahi</option>
                            <option value="Kandhkot">Kandhkot</option>
                            <option value="Kandiaro">Kandiaro</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Kashmore">Kashmore</option>
                            <option value="Keti Bandar">Keti Bandar</option>
                            <option value="Khairpur">Khairpur</option>
                            <option value="Kotri">Kotri</option>
                            <option value="Larkana">Larkana</option>
                            <option value="Matiari">Matiari</option>
                            <option value="Mehar">Mehar</option>
                            <option value="Mirpur Khas">Mirpur Khas</option>
                            <option value="Mithani">Mithani</option>
                            <option value="Mithi">Mithi</option>
                            <option value="Mehrabpur">Mehrabpur</option>
                            <option value="Moro">Moro</option>
                            <option value="Nagarparkar">Nagarparkar</option>
                            <option value="Naudero">Naudero</option>
                            <option value="Naushahro Feroze">Naushahro Feroze</option>
                            <option value="Naushara">Naushara</option>
                            <option value="Nawabshah">Nawabshah</option>
                            <option value="Nazimabad">Nazimabad</option>
                            <option value="Qambar">Qambar</option>
                            <option value="Qasimabad">Qasimabad</option>
                            <option value="Ranipur">Ranipur</option>
                            <option value="Ratodero">Ratodero</option>
                            <option value="Rohri">Rohri</option>
                            <option value="Sakrand">Sakrand</option>
                            <option value="Sanghar">Sanghar</option>
                            <option value="Shahbandar">Shahbandar</option>
                            <option value="Shahdadkot">Shahdadkot</option>
                            <option value="Shahdadpur">Shahdadpur</option>
                            <option value="Shahpur Chakar">Shahpur Chakar</option>
                            <option value="Shikarpaur">Shikarpaur</option>
                            <option value="Sukkur">Sukkur</option>
                            <option value="Tangwani">Tangwani</option>
                            <option value="Tando Adam Khan">Tando Adam Khan</option>
                            <option value="Tando Allahyar">Tando Allahyar</option>
                            <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                            <option value="Thatta">Thatta</option>
                            <option value="Umerkot">Umerkot</option>
                            <option value="Warah">Warah</option>
                            <option value="" disabled>Khyber Cities</option>
                            <option value="Abbottabad">Abbottabad</option>
                            <option value="Adezai">Adezai</option>
                            <option value="Alpuri">Alpuri</option>
                            <option value="Akora Khattak">Akora Khattak</option>
                            <option value="Ayubia">Ayubia</option>
                            <option value="Banda Daud Shah">Banda Daud Shah</option>
                            <option value="Bannu">Bannu</option>
                            <option value="Batkhela">Batkhela</option>
                            <option value="Battagram">Battagram</option>
                            <option value="Birote">Birote</option>
                            <option value="Chakdara">Chakdara</option>
                            <option value="Charsadda">Charsadda</option>
                            <option value="Chitral">Chitral</option>
                            <option value="Daggar">Daggar</option>
                            <option value="Dargai">Dargai</option>
                            <option value="Darya Khan">Darya Khan</option>
                            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                            <option value="Doaba">Doaba</option>
                            <option value="Dir">Dir</option>
                            <option value="Drosh">Drosh</option>
                            <option value="Hangu">Hangu</option>
                            <option value="Haripur">Haripur</option>
                            <option value="Karak">Karak</option>
                            <option value="Kohat">Kohat</option>
                            <option value="Kulachi">Kulachi</option>
                            <option value="Lakki Marwat">Lakki Marwat</option>
                            <option value="Latamber">Latamber</option>
                            <option value="Madyan">Madyan</option>
                            <option value="Mansehra">Mansehra</option>
                            <option value="Mardan">Mardan</option>
                            <option value="Mastuj">Mastuj</option>
                            <option value="Mingora">Mingora</option>
                            <option value="Nowshera">Nowshera</option>
                            <option value="Paharpur">Paharpur</option>
                            <option value="Pabbi">Pabbi</option>
                            <option value="Peshawar">Peshawar</option>
                            <option value="Saidu Sharif">Saidu Sharif</option>
                            <option value="Shorkot">Shorkot</option>
                            <option value="Shewa Adda">Shewa Adda</option>
                            <option value="Swabi">Swabi</option>
                            <option value="Swat">Swat</option>
                            <option value="Tangi">Tangi</option>
                            <option value="Tank">Tank</option>
                            <option value="Thall">Thall</option>
                            <option value="Timergara">Timergara</option>
                            <option value="Tordher">Tordher</option>
                            <option value="" disabled>Balochistan Cities</option>
                            <option value="Awaran">Awaran</option>
                            <option value="Barkhan">Barkhan</option>
                            <option value="Chagai">Chagai</option>
                            <option value="Dera Bugti">Dera Bugti</option>
                            <option value="Gwadar">Gwadar</option>
                            <option value="Harnai">Harnai</option>
                            <option value="Jafarabad">Jafarabad</option>
                            <option value="Jhal Magsi">Jhal Magsi</option>
                            <option value="Kacchi">Kacchi</option>
                            <option value="Kalat">Kalat</option>
                            <option value="Kech">Kech</option>
                            <option value="Kharan">Kharan</option>
                            <option value="Khuzdar">Khuzdar</option>
                            <option value="Killa Abdullah">Killa Abdullah</option>
                            <option value="Killa Saifullah">Killa Saifullah</option>
                            <option value="Kohlu">Kohlu</option>
                            <option value="Lasbela">Lasbela</option>
                            <option value="Lehri">Lehri</option>
                            <option value="Loralai">Loralai</option>
                            <option value="Mastung">Mastung</option>
                            <option value="Musakhel">Musakhel</option>
                            <option value="Nasirabad">Nasirabad</option>
                            <option value="Nushki">Nushki</option>
                            <option value="Panjgur">Panjgur</option>
                            <option value="Pishin Valley">Pishin Valley</option>
                            <option value="Quetta">Quetta</option>
                            <option value="Sherani">Sherani</option>
                            <option value="Sibi">Sibi</option>
                            <option value="Sohbatpur">Sohbatpur</option>
                            <option value="Washuk">Washuk</option>
                            <option value="Zhob">Zhob</option>
                            <option value="Ziarat">Ziarat</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label">Postal Address </label>
                          <input type="text" class="form-control" id="validation-addr1" placeholder="Postal Address " required>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="form-label">Permanent Address </label>
                          <input type="text" class="form-control" id="validation-addr2" placeholder="Permanent Address " required>
                      </div>
                  </div>
                  <hr class="col-md-12">
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">Profile Picture </label>
                          <input type="file" class="form-control" id="Icon00" placeholder="sdf" required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">CNIC Front </label>
                          <input type="file" class="form-control" id="Icon001" placeholder="sdf" required>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="form-label">CNIC Back </label>
                          <input type="file" class="form-control" id="Icon002" placeholder="sdf" required>
                      </div>
                  </div>               
                </div>
          </div>
      </div>
      <div class="card">
        <div class="card-header bg-light">
            <h5>ADD LATEST ACADEMIC/ PROFESSIONAL QUALIFICATIONS</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 mb-3">
                    <div class="form-group">
                        <label class="form-label">Qualifications</label>
                        <select name="qualifications" class="form-control" id="validation-gender" required="required">
                            <option selected="" value="Nill" disabled="">Select Qualifications ↓ </option>
                            <option value="Matriculation">Matriculation</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Master">Master</option>
                            <option value="Doctoral">Doctoral</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label class="form-label">Degree Title / Subjects </label>
                        <input name="degree" type="text" class="form-control" id="validation-fname" placeholder="Degree Title / Subjects" required="required">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Board/University </label>
                        <input name="board" type="text" class="form-control" id="validation-fname" placeholder="Board/University" required="required">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header bg-light">
            <h5>CURRENT WORK EXPERIENCE</h5>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <label class="form-label">Designation </label>
                <input name="designation" type="text" class="form-control" id="validation-fname" placeholder="Job Designation" required="" value="">
              </div>
            </div>
            <div class="col-md-8 mb-3">
              <div class="form-group">
                <label class="form-label">Company / Organization </label>
                <input name="jobcomp" type="text" class="form-control" id="validation-fname" placeholder="Company / Organizations" required="" value="">
              </div>
            </div>
            <div class="col-md-12 text-white bg-success">
               <strong>Note:</strong> Write N/A if not applicable.
            </div>
            <hr class="col-md-12">
            <button type="submit" class="btn  btn-info float-right mr-1">Next</button>
            <button type="submit" class="btn  btn-warning float-right">Update</button>
            </div>
        </div>
      </div>
  </form>
  </div>
</div>
<!--Candidate Basic Info form End-->
</div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>
</html>
