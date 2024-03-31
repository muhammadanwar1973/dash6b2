<!--Head Section Start-->
<?php
  include('layout/head.php');
?>

<body class="" style="background-color: #ecf0f5; font-size: inherit;">
<section class="main-container">
<div class="row">
  <!--Logo Start-->
  <div class="col-md-12 p-3 text-center">
      <div class="logo">
          <img src="https://registration.icm.org.pk/assets/images/signin22.png" class="img-fluid">
      </div>
  </div>
  <!--Logo End-->
  <!--Title Start-->
  <div class="col-md-12 bg-primary text-light p-3 text-center">
      <strong>IFMP ONLINE REGISTRATION MANAGEMENT SYSTEM</strong>
  </div>
  <!--Title End-->		
  <div class="col-md-12 mt-3">
  </div>	
  <!--instruction Start-->
  <div class="col-sm-12 p-3 text-left">
  <h4 style="padding-left: 10px;">TERMS AND CONDITIONS</h4>
      <ul>
          <li>The Institute's Registrations are governed by a number of policies and regulations. It is important that candidates familiarize themselves with these prior to Registration. The policies can be seen at IFMP's website.</li>
          <li>Applications for Institute's Registration constitute acceptance of the Institute of Financial Markets of Pakistan Registration Regulations. As a minimum, candidates should read these regulations available on IFMP's website as these provide essential information about the Registration process and what the Institute requires from candidates.</li>
          <li>Candidates are required to complete the Programme Registration Form in all aspects. Please clearly mark "N/A" to all columns which are Not Applicable.</li>
          <li>Please note that all identification needs to be valid i.e. the date on the identification must not have expired.</li>
          <li>For detailed policies, please visit IFMP's website at www.ifmp.org.pk</li>
      </ul>
  </div>
  <!--instruction End-->	
</div>

<!-- flashdata for success -->
  <form method="post" id="validation-form123" action="" enctype="">
  <div class="col-sm-12">
    <div class="card">
    <div class="card-header">
        <h5>CANDIDATE REGISTRATION FORM</h5>
    </div>
    <div class="card-body">
    <div class="row">
    <!--<form id="validation-form123" action="#">-->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label class="form-label">Applicant's Full Name </label>
                    <input name="name" type="text" class="form-control" id="validation-name" placeholder="Applicant's Full Name " required="required">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label class="form-label">Father/Husband Name </label>
                    <input name="fname" type="text" class="form-control" id="validation-fname" placeholder="Father/Husband's Name " required="required">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">CNIC Number  </label>
                    <input name="cnic" type="tel" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" class="form-control" id="validation-cnic" placeholder="CNIC Number " max="13" required="required">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Mobile No  </label>
                    <input name="mobile" type="text" class="form-control" id="validation-mobile" placeholder="Mobile No " required="required">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="validation-email" placeholder="Email" required="required">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Date of Birth  </label>
                    <input name="dob" type="date" class="form-control" id="Extend" placeholder="123" required="required">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Gender </label>
                    <select name="gender" class="form-control" id="validation-gender" required="required">
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group fill">
                    <label class="form-label">Telephone (Res)  </label>
                    <input name="teleres" type="tel" class="form-control" id="validation-telephoner" placeholder="Telephone (Res) " value="">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Telephone (off)  </label>
                    <input name="teleoff" type="tel" class="form-control" id="validation-telephoneof" placeholder="Telephone (Off) " value="">
                </div>
            </div>
			<div class="clearfix"></div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Province </label>
                    <select name="province" class="form-control" id="select-country23" required="required">
                        <option selected value="Nill" Disabled>Select Province  &#8595; </option>
                        <option value="Azad Jammu and Kashmir">Azad Jammu and Kashmir</option>
                        <option value="Balochistan">Balochistan</option>
                        <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">City / Division </label>
                    <select name="division" class="form-control" id="select-city" required="required">
                      <option selected value="Nill" Disabled>Select City &#8595; </option>
                      <option value="Bahawalpur">Bahawalpur</option>
                      <option value="Bannu Division">Bannu Division</option>
                      <option value="D.I.Khan Division">D.I.Khan Division</option>
                      <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                      <option value="F.A.T.A.">F.A.T.A.</option>
                      <option value="Faisalabad">Faisalabad</option>
                      <option value="Gujranwala">Gujranwala</option>
                      <option value="Hazara Division">Hazara Division</option>
                      <option value="Hyderabad">Hyderabad</option>
                      <option value="Islamabad Federal">Islamabad Federal</option>
                      <option value="Kalat">Kalat</option>
                      <option value="Karachi">Karachi</option>
                      <option value="Kohat Division">Kohat Division</option>
                      <option value="Lahore">Lahore</option>
                      <option value="Larkana">Larkana</option>
                      <option value="Makran">Makran</option>
                      <option value="Malakand Division">Malakand Division</option>
                      <option value="Mardan Division">Mardan Division</option>
                      <option value="Mirpur">Mirpur</option>
                      <option value="Mirpur Khas">Mirpur Khas</option>
                      <option value="Multan">Multan</option>
                      <option value="Muzaffarabad">Muzaffarabad</option>
                      <option value="Nasirabad">Nasirabad</option>
                      <option value="Peshawar Division">Peshawar Division</option>
                      <option value="Quetta">Quetta</option>
                      <option value="Rawalakot">Rawalakot</option>
                      <option value="Rawalpindi">Rawalpindi</option>
                      <option value="Sahiwal">Sahiwal</option>
                      <option value="Sargodha">Sargodha</option>
                      <option value="Shaheed Benazirabad">Shaheed Benazirabad</option>
                      <option value="Sibi">Sibi</option>
                      <option value="Sukkur">Sukkur</option>
                      <option value="Zhob">Zhob</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                  <label class="form-label">District </label>
                  <select name="district" class="form-control" id="select-district" required="required">
                    <option selected value="Nill" Disabled>Select District &#8595; </option>
                    <option value="Abbottabad">Abbottabad</option>
                    <option value="Attock">Attock</option>
                    <option value="Awaran">Awaran</option>
                    <option value="Badin">Badin</option>
                    <option value="Bagh">Bagh</option>
                    <option value="Bahawalnagar">Bahawalnagar</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Bajaur Agency (At Khar Bajaur)">Bajaur Agency (At Khar Bajaur)</option>
                    <option value="Bannu">Bannu</option>
                    <option value="Barkhan">Barkhan</option>
                    <option value="Batagram (At Bana)">Batagram (At Bana)</option>
                    <option value="Bhakkar">Bhakkar</option>
                    <option value="Bhimber">Bhimber</option>
                    <option value="Buner">Buner</option>
                    <option value="Chagai (At Dalbandin)">Chagai (At Dalbandin)</option>
                    <option value="Chakwal">Chakwal</option>
                    <option value="Charsadda">Charsadda</option>
                    <option value="Chiniot">Chiniot</option>
                    <option value="Chitral">Chitral</option>
                    <option value="Dadu">Dadu</option>
                    <option value="Dera Bugti">Dera Bugti</option>
                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Ghotki (At Mirpur Mathelo)">Ghotki (At Mirpur Mathelo)</option>
                    <option value="Gujranwala">Gujranwala</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Gwadar">Gwadar</option>
                    <option value="Hafizabad">Hafizabad</option>
                    <option value="Hangu">Hangu</option>
                    <option value="Haripur">Haripur</option>
                    <option value="Harnai">Harnai</option>
                    <option value="Hattian Bala">Hattian Bala</option>
                    <option value="Haveli">Haveli</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Islamabad Federal">Islamabad Federal</option>
                    <option value="Jacobabad">Jacobabad</option>
                    <option value="Jaffarabad">Jaffarabad</option>
                    <option value="Jamshoro">Jamshoro</option>
                    <option value="Jhal Magsi (At Gandawa)">Jhal Magsi (At Gandawa)</option>
                    <option value="Jhang">Jhang</option>
                    <option value="Jhelum">Jhelum</option>
                    <option value="Kachhi (Bolan) (At Dhadar)">Kachhi (Bolan) (At Dhadar)</option>
                    <option value="Kalat">Kalat</option>
                    <option value="Kambar Shahdadkot">Kambar Shahdadkot</option>
                    <option value="Karachi Central">Karachi Central</option>
                    <option value="Karachi East">Karachi East</option>
                    <option value="Karachi South">Karachi South</option>
                    <option value="Karachi West">Karachi West</option>
                    <option value="Karak">Karak</option>
                    <option value="Kashmore">Kashmore</option>
                    <option value="Kasur">Kasur</option>
                    <option value="Kech (At Turbat)">Kech (At Turbat)</option>
                    <option value="Khairpur">Khairpur</option>
                    <option value="Khanewal">Khanewal</option>
                    <option value="Kharan">Kharan</option>
                    <option value="Khushab">Khushab</option>
                    <option value="Khuzdar">Khuzdar</option>
                    <option value="Khyber Agency (At Peshawar)">Khyber Agency (At Peshawar)</option>
                    <option value="Killa Abdullah">Killa Abdullah</option>
                    <option value="Killa Saifullah">Killa Saifullah</option>
                    <option value="Kohat">Kohat</option>
                    <option value="Kohistan">Kohistan</option>
                    <option value="Kohlu">Kohlu</option>
                    <option value="Korangi">Korangi</option>
                    <option value="Kotli">Kotli</option>
                    <option value="Kurram Agency (At Parachinar)">Kurram Agency (At Parachinar)</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Lakki Marwat">Lakki Marwat</option>
                    <option value="Larkana">Larkana</option>
                    <option value="Lasbela (At Uthal)">Lasbela (At Uthal)</option>
                    <option value="Layyah">Layyah</option>
                    <option value="Lehri">Lehri</option>
                    <option value="Lodhran">Lodhran</option>
                    <option value="Loralai">Loralai</option>
                    <option value="Lower Dir (At Temergara)">Lower Dir (At Temergara)</option>
                    <option value="Malakand (Pata Administered)">Malakand (Pata Administered)</option>
                    <option value="Malir">Malir</option>
                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                    <option value="Mansehra">Mansehra</option>
                    <option value="Mardan">Mardan</option>
                    <option value="Mastung">Mastung</option>
                    <option value="Matiari">Matiari</option>
                    <option value="Mianwali">Mianwali</option>
                    <option value="Mirpur">Mirpur</option>
                    <option value="Mirpur Khas">Mirpur Khas</option>
                    <option value="Mohmand Agency (At Ghallanay)">Mohmand Agency (At Ghallanay)</option>
                    <option value="Multan">Multan</option>
                    <option value="Musakhel">Musakhel</option>
                    <option value="Muzaffarabad">Muzaffarabad</option>
                    <option value="Muzaffargarh">Muzaffargarh</option>
                    <option value="Nankana Sahib">Nankana Sahib</option>
                    <option value="Narowal">Narowal</option>
                    <option value="Nasirabad (At Dera Murd Jamali)">Nasirabad (At Dera Murd Jamali)</option>
                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                    <option value="Neelum">Neelum</option>
                    <option value="North Waziristan Agency (At Miran Shah)">North Waziristan Agency (At Miran Shah)</option>
                    <option value="Nowshera">Nowshera</option>
                    <option value="Nushki">Nushki</option>
                    <option value="Okara">Okara</option>
                    <option value="Orakzai Agency (At Kalaya)">Orakzai Agency (At Kalaya)</option>
                    <option value="Pakpattan">Pakpattan</option>
                    <option value="Panjgur">Panjgur</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Pishin">Pishin</option>
                    <option value="Poonch">Poonch</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                    <option value="Rajanpur">Rajanpur</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Sahiwal">Sahiwal</option>
                    <option value="Sanghar">Sanghar</option>
                    <option value="Sargodha">Sargodha</option>
                    <option value="Shaheed Benazirabad">Shaheed Benazirabad</option>
                    <option value="Shangla (At Alpuri)">Shangla (At Alpuri)</option>
                    <option value="Sheerani">Sheerani</option>
                    <option value="Sheikhupura">Sheikhupura</option>
                    <option value="Shikarpur">Shikarpur</option>
                    <option value="Sialkot">Sialkot</option>
                    <option value="Sibi">Sibi</option>
                    <option value="Sohbatpur">Sohbatpur</option>
                    <option value="South Waziristan Agency (At Wana)">South Waziristan Agency (At Wana)</option>
                    <option value="Sudhnoti">Sudhnoti</option>
                    <option value="Sujawal">Sujawal</option>
                    <option value="Sukkur">Sukkur</option>
                    <option value="Swabi">Swabi</option>
                    <option value="Swat (At Mingora)">Swat (At Mingora)</option>
                    <option value="Tando Allahyar">Tando Allahyar</option>
                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                    <option value="Tank">Tank</option>
                    <option value="Tharparkar">Tharparkar</option>
                    <option value="Thatta">Thatta</option>
                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                    <option value="Torghar (At Oghi)">Torghar (At Oghi)</option>
                    <option value="Umerkot">Umerkot</option>
                    <option value="Upper Dir (At Dir)">Upper Dir (At Dir)</option>
                    <option value="Vehari">Vehari</option>
                    <option value="Washuk">Washuk</option>
                    <option value="Zhob">Zhob</option>
                    <option value="Ziarat">Ziarat</option>
                  </select>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label class="form-label">Postal Address </label>
                    <input name="postaladdr" type="text" class="form-control" id="validation-addr1" placeholder="Postal Address " required="required">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label class="form-label">Permanent Address </label>
                    <input name="permanentaddr" type="text" class="form-control" id="validation-addr2" placeholder="Permanent Address " required="required">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Profile Picture </label>
                    <input accept="image/*" name="profilepic" type="file" class="form-control" id="validateprofile" placeholder="sdf" value="" required="required">
                    <label id="profile-size" class="invalid-feedback" for="profilepic">Image Size Must be Less than 2MB</label>
                    <label id="profile-ext" class="invalid-feedback" for="profilepic">Upload Only Image</label>
                    <img src="" style="width: 100%; padding: 5px;">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">CNIC Front </label>
                    <input accept="image/*" name="cnicpicf" type="file" class="form-control" id="validatecnicf" placeholder="sdf" value="" required="required">
                    <label id="cnicpicf-size" class="invalid-feedback" for="cnicpicf">Image Size Must be Less than 2MB</label>
                    <label id="cnicpicf-ext" class="invalid-feedback" for="cnicpicf">Upload Only Image</label>
                    <img src="" style="width: 100%; padding: 5px;">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label class="form-label">CNIC Back </label>
                    <input accept="image/*" name="cnicpicb" type="file" class="form-control" id="validatecnicb" placeholder="sdf" value="" required="required">
                    <label id="cnicpicb-size" class="invalid-feedback" for="cnicpicb">Image Size Must be Less than 2MB</label>
                    <label id="cnicpicb-ext" class="invalid-feedback" for="cnicpicb">Upload Only Image</label>
                    <img src="" style="width: 100%; padding: 5px;">
                </div>
            </div>
    <!--</form>-->
    </div>
    </div>
    </div>
    </div>

  <div class="col-md-12 mt-3">
  </div>	

  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5>ADD LATEST ACADEMIC/ PROFESSIONAL QUALIFICATIONS</h5>
      </div>
      <div class="card-body">
        <!--<form id="validation-form123" action="#!">-->
          <div class="row">
            <div class="col-md-2 mb-3">
              <div class="form-group">
                <label class="form-label">Qualifications</label>
                <select name="qualifications" class="form-control" id="validation-gender" required="required">
                    <option selected value="Nill" Disabled>Select Qualifications &#8595; </option>
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
        <!--</form>-->
      </div>
    </div>
  </div>

  <div class="col-md-12 mt-3">
</div>	

  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
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
            <div class="col-md-12 mt-3">
            </div>
            <div class="col-sm-12">
            <h5>DECLARATION</h5>
            <p class="text-danger">I hereby certify that the information given above is correct and I take full responsibility for any incorrect information. I clearly understand that acceptance of my application form and appearance in the IFMP tests does not mean qualification of examination.
              <br>I hereby agree to abide by the rules and regulations of the IFMP, as applicable currently, and revised/updated/enforced, during the currency of programme. I have also read all terms and conditions at the end of this form.</p>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheckBox1" required="">
                  <label class="custom-control-label" for="customCheckBox1">I acknowledge that I have read and agree to the terms and conditions.</label>
              </div>
          </div>
          <div class="col-md-12 mt-3">
          </div>	
        </div>
        <button name="submit" type="submit" class="btn  btn-warning float-right">Submit</button>
          </div>
      </div>
    </div>
  </div>

<div class="col-md-12 mt-3">
</div>	
  </form>
</div>
</div>
</section>
</body>