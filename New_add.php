<!--?php
//echo "ID: " . $_POST['id']. "<br-->
<html lang="en">
 <head></head>
 <body>
  "; require __DIR__ .'/../backend/connect.php'; if(isset($_POST['create_btn'])) { //echo "Yep it's set!
  <br>"; $newcat = $_POST['main_cat']; $newsub = $_POST['addsubcategory']; $query = "insert into categories (category, sub) values ('$newcat', '$newsub')"; $conn-&gt;query($query) or die($conn-&gt;error); } function joinarray($arrayIn = array(), $count) { $hold = ""; for($i=0;$i&lt;$count;$i++, $hold .= " ") { $hold .= $arrayIn[$i]; } return $hold; } function wrapwords($input) { return joinarray(explode(" ", $input), 25); } ?&gt;    
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link href="assets/css/titile.css" rel="stylesheet"> 
  <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet"> 
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <title></title>   
  <!--navbar_start--> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
   <a class="navbar-brand" href="#"><img src="img/mobicon.png">My Opportunity Bank</a> 
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
   <div class="collapse navbar-collapse" id="navbarText"> 
    <ul class="navbar-nav mr-auto"> 
     <!--<li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul> --> 
     <span class="navbar-text"> Content Management Panel </span> 
    </ul>
   </div> 
  </nav> 
  <!--navbar_end--> 
  <!--main_container_start--> 
  <div> 
   <!--first_section_start--> 
   <div id="first" style="background-image: url(cd.jpg);"> 
    <h3>Create Opportunity</h3> 
   </div> 
   <!--first_section_end--> 
   <!--second_section_start--> 
   <div id="second"> 
    <div id="inputs"> 
     <!-- Button trigger modal --> 
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> Create New Category </button>
     <hr> 
     <!-- Modal --> 
     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
      <div class="modal-dialog" role="document"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> 
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
        </div> 
        <div class="modal-body"> 
         <form method="post" action="maincontroller.php"> 
          <div class="form-group"> 
           <label for="exampleFormControlSelect1">Category</label> 
           <select name="main_cat" id="cat" class="form-control"> <option selected>-- Category --</option> <option value="scholarship">Schorlaship</option> <option value="jobs">Jobs</option> <option value="training">Training</option> <option value="funding">Funding</option> <option value="challenge">Challenge</option> <option value="investments">Investment</option> <option value="concour">Competitive Entrance Exam</option> </select> 
          </div> 
          <input type="text" class="form-control" required name="addsubcategory" placeholder="Name new category"> 
          <input class="btn btn-primary" type="submit" name="create_btn" value="Create"> 
         </form> 
        </div> 
        <div class="modal-footer"> 
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
         <!--<button type="button" class="btn btn-primary">Save changes</button>--> 
        </div> 
       </div> 
      </div> 
     </div> 
     <form method="post" action="maincontroller.php"> 
      <div class="form-group"> 
       <label for="exampleFormControlInput1">Title</label> 
       <input type="text" class="form-control" required name="title" id="title" placeholder="Some cool something"> 
      </div> 
      <div class="form-group"> 
       <label for="exampleFormControlSelect1">Category</label> 
       <select required name="category" class="form-control" id="cat"> <option onclick="getsub('option')">-- Option --</option> <option onclick="getsub('scholarship')">Schorlaship</option> <option onclick="getsub('jobs')">Jobs</option> <option onclick="getsub('training')">Training</option> <option onclick="getsub('funding')">Funding</option> <option onclick="getsub('challenge')">Challenge</option> <option onclick="getsub('investment')">Investment</option> <option onclick="getsub('concour')">Competitive Entrance Exam</option> </select> 
      </div> 
      <div class="form-group"> 
       <label name="subcategory" for="exampleFormControlSelect1">Sub Category</label> 
       <select name="subcategory" class="form-control" id="subcategory"> </select> 
      </div> 
      <div class="form-group"> 
       <label for="officiallink">Official Link</label> 
       <input required type="text" class="form-control" name="officiallink" id="officiallink" placeholder="https://google.com"> 
      </div> 
      <div class="form-group"> 
       <label for="deadline">Deadline</label> 
       <input required type="date" class="form-control" name="deadline" id="deadline"> 
      </div> 
      <div class="form-group"> 
       <label for="description">Description</label> 
       <textarea required name="description" class="form-control" id="description" rows="3"></textarea> 
      </div> 
      <div class="form-group"> 
       <label for="application_process">Application Process</label> 
       <textarea required name="applicationprocess" class="form-control" id="application_process" rows="3"></textarea> 
      </div> 
      <div class="form-group"> 
       <label for="eligibility">Eligibility</label> 
       <textarea required name="eligibility" class="form-control" id="eligibility" rows="3"></textarea> 
      </div> 
      <div class="form-group"> 
       <label for="benefits">Benefits</label> 
       <textarea required name="benefits" class="form-control" id="benefits" rows="3"></textarea> 
      </div> 
      <div class="form-group"> 
       <label for="exampleFormControlSelect1">Regions</label> 
       <!-- Country dropdown list by ahandy --> 
       <select name="region" class="form-control" id="region"> <option value="Option" selected> --- Countries -- </option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="American Samoa">American Samoa</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antartica">Antarctica</option> <option value="Antigua and Barbuda">Antigua and Barbuda</option> <option value="Argentina">Argentina</option> <option value="Armenia">Armenia</option> <option value="Aruba">Aruba</option> <option value="Australia">Australia</option> <option value="Austria">Austria</option> <option value="Azerbaijan">Azerbaijan</option> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesh">Bangladesh</option> <option value="Barbados">Barbados</option> <option value="Belarus">Belarus</option> <option value="Belgium">Belgium</option> <option value="Belize">Belize</option> <option value="Benin">Benin</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivia">Bolivia</option> <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option> <option value="Botswana">Botswana</option> <option value="Bouvet Island">Bouvet Island</option> <option value="Brazil">Brazil</option> <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> <option value="Brunei Darussalam">Brunei Darussalam</option> <option value="Bulgaria">Bulgaria</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> <option value="Cambodia">Cambodia</option> <option value="Cameroon">Cameroon</option> <option value="Canada">Canada</option> <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Christmas Island">Christmas Island</option> <option value="Cocos Islands">Cocos (Keeling) Islands</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Congo">Congo, the Democratic Republic of the</option> <option value="Cook Islands">Cook Islands</option> <option value="Costa Rica">Costa Rica</option> <option value="Cota D'Ivoire">Cote d'Ivoire</option> <option value="Croatia">Croatia (Hrvatska)</option> <option value="Cuba">Cuba</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="East Timor">East Timor</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Falkland Islands">Falkland Islands (Malvinas)</option> <option value="Faroe Islands">Faroe Islands</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="France Metropolitan">France, Metropolitan</option> <option value="French Guiana">French Guiana</option> <option value="French Polynesia">French Polynesia</option> <option value="French Southern Territories">French Southern Territories</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Gibraltar">Gibraltar</option> <option value="Greece">Greece</option> <option value="Greenland">Greenland</option> <option value="Grenada">Grenada</option> <option value="Guadeloupe">Guadeloupe</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guinea">Guinea</option> <option value="Guinea-Bissau">Guinea-Bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option> <option value="Holy See">Holy See (Vatican City State)</option> <option value="Honduras">Honduras</option> <option value="Hong Kong">Hong Kong</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran">Iran (Islamic Republic of)</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option> <option value="Korea">Korea, Republic of</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Lao">Lao People's Democratic Republic</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macau">Macau</option> <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Martinique">Martinique</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mayotte">Mayotte</option> <option value="Mexico">Mexico</option> <option value="Micronesia">Micronesia, Federated States of</option> <option value="Moldova">Moldova, Republic of</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="Netherlands Antilles">Netherlands Antilles</option> <option value="New Caledonia">New Caledonia</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="Niue">Niue</option> <option value="Norfolk Island">Norfolk Island</option> <option value="Northern Mariana Islands">Northern Mariana Islands</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Pitcairn">Pitcairn</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Reunion">Reunion</option> <option value="Romania">Romania</option> <option value="Russia">Russian Federation</option> <option value="Rwanda">Rwanda</option> <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> <option value="Saint LUCIA">Saint LUCIA</option> <option value="Saint Vincent">Saint Vincent and the Grenadines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Sao Tome and Principe">Sao Tome and Principe</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Senegal">Senegal</option> <option value="Seychelles">Seychelles</option> <option value="Sierra">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Slovakia">Slovakia (Slovak Republic)</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Georgia">South Georgia and the South Sandwich Islands</option> <option value="Span">Spain</option> <option value="SriLanka">Sri Lanka</option> <option value="St. Helena">St. Helena</option> <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Svalbard">Svalbard and Jan Mayen Islands</option> <option value="Swaziland">Swaziland</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syria">Syrian Arab Republic</option> <option value="Taiwan">Taiwan, Province of China</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania">Tanzania, United Republic of</option> <option value="Thailand">Thailand</option> <option value="Togo">Togo</option> <option value="Tokelau">Tokelau</option> <option value="Tonga">Tonga</option> <option value="Trinidad and Tobago">Trinidad and Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks and Caicos">Turks and Caicos Islands</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="United Kingdom">United Kingdom</option> <option value="United States">United States</option> <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> <option value="Uruguay">Uruguay</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Venezuela">Venezuela</option> <option value="Vietnam">Viet Nam</option> <option value="Virgin Islands (British)">Virgin Islands (British)</option> <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option> <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option> <option value="Western Sahara">Western Sahara</option> <option value="Yemen">Yemen</option> <option value="Yugoslavia">Yugoslavia</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option> </select> 
      </div> 
      <input class="btn btn-primary" type="submit" value="Add Opportunity"> 
      <!--<input class="btn btn-primary" type="submit" value="Public Opportunity">--> 
     </form> 
    </div> 
   </div> 
   <!--second_section_end--> 
  </div> 
  <!--main_container_end--> 
  <script>
      function getsub(str) {
        //alert("GOT Str: " + str);
        document.getElementById("subcategory").innerHTML = "";
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById("subcategory").innerHTML += this.responseText;
          }
        };
        xhttp.open("GET", "../backend/getSubs.php?q="+str, true);
        xhttp.send();
      }
    </script> 
  <!--bs_js_start
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--bs_js_end--> 
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
  <!--custom_js_start--> 
  <script src="assets/js/index.js"></script> 
  <!--custom_js_end-->   
 </body>
</html>