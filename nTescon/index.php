<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner" style="background: url("images/registration-form-2.jpg"); min-width: 850px; margin: auto; padding-top: 68px; padding-bottom: 48px; ">
				<form action="">
					<h3>UENR Tescon Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" class="form-control" name="First Name"  value="<?php if(isset($_POST['First Name'])) echo $_POST['First Name']; ?>">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" class="form-control" name="Last Name" value="<?php if(isset($_POST['Last Name'])) echo $_POST['Last Name']; ?>">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="email" class="form-control" name="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>">
					</div>
					<div class="form-wrapper">
						<label for="">Residence</label>
						<input type="text" class="form-control" name="Residence" value="<?php if(isset($_POST['Residence'])) echo $_POST['Residence']; ?>">
					</div>
					<div class="form-wrapper">
						<label for="">Region</label>
						<select class="form-control" name="Region" style="size:50px; height:40px" value="<?php if(isset($_POST['submit']) && isset($_POST['Region'])) echo $_POST['Region']; ?>">
						    
                            <option value="Ashanti">Ashanti</option>
                            <option value="Upper East">Upper East</option>
                            <option value="Upper West">Upper West</option>
                            <option value="North East">North East</option>
                            <option value="Savannah">Savannah</option>
                            <option value="Northern">Nothern</option>
                            <option value="Ahafo">Ahafo</option>
                            <option value="Bono East">Bono East</option>
                            <option value="Bono">Bono</option>
                            <option value="Volta">Volta</option>
                            <option value="Oti">Oti</option>
                            <option value="Western North">Western North</option>
                            <option value="Western">Western</option>
                            <option value="Eastern">Eastern</option>
                            <option value="Central">Central</option>
                            <option value="Greater Accra">Greater Accra</option>
						</select>
					</div>
                    <div class="form-wrapper">
						<label for="">Tel</label>
						<input type="number" class="form-control" name="Tel" size="10" value="<?php if(isset($_POST['submit']) && isset($_POST['Tel'])) echo $_POST['Tel']; ?>">
					</div>
                    <div class="form-wrapper">
						<label for="">Department</label>
						<select class="form-control" name="Department" style="size:50px; height:40px" value="<?php if(isset($_POST['Department'])) echo $_POST['Department']; ?>">
						    <option value="Computer Science and Informatics">Computer Science and Informatics</option>
                            <option value="Chemical Sciences">Chemical Sciences</option>
                            <option value="Basic and Applied Biology">Basic and Applied Biology</option>
                            <option value="Mathematics and Statistics">Mathematics and Statistics</option>
                            <option value="Computer and Electrical Engineering"> Computer and Electrical Engineering</option>
                            <option value="Mechanical and Manufacturing Engineering">Mechanical and Manufacturing Engineering</option>
                            <option value="Energy and Petroleum Engineering">Energy and Petroleum Engineering</option>
                            <option value="Ecotourism, Recreation and Hospitality">Ecotourism, Recreation and Hospitality</option>
                            <option value="Environmental Management">Environmental Management</option>
                            <option value="Fisheries and Water Resources">Fisheries and Water Resources</option>
                            <option value="Forest Science">Forest Science</option>
                            <option value="3CGS">3CGS</option>
						</select>
					</div>
                    <div class="form-wrapper">
						<label for="">Constituency</label>
						<select class="form-control" name="Consistuency" style="size:50px; height:40px" value="<?php if(isset($_POST['submit']) && isset($_POST['Constituency'])) echo $_POST['Constituency']; ?>">
                            <optgroup label="Ashanti Region">
						    <option value="Adansi-Asokwa">Adansi-Asokwa</option>
                            <option value="Fomena">Fomena</option>
                            <option value="New Edubease">New Edubease</option>
                            <option value="Kwabre West">Kwabre West</option>
                            <option value="Ahafo Ano North">Ahafo Ano North</option>
                            <option value="Ahafo Ano South East">Ahafo Ano South East</option>
                            <option value="Ahafo Ano South West">Ahafo Ano South West</option>
                            <option value="Odotobri">Odotobri</option>
                            <option value="Manso Nkwanta">Manso Nkwanta</option>
                            <option value="Manso Edubia">Manso Edubia</option>
                            <option value="Asante-Akim Central">Asante-Akim Central</option>
                            <option value="Asante-Akim North">Asante-Akim North</option>
                            <option value="Asante-Akim South">Asante-Akim South</option>
                            <option value="Atwima-Kwanwoma">Atwima-Kwanwoma</option>
                            <option value="Atwima-Mponua">Atwima-Mponua</option>
                            <option value="Atwima-Nwabiagya North">Atwima-Nwabiagya North</option>
                            <option value="Atwima-Nwabiagya South">Atwima-Nwabiagya South</option>
                            <option value="Bekwai">Bekwai</option>
                            <option value="Bosome-Freho">Bosome-Freho</option>
                            <option value="Bosomtwe">Bosomtwe</option>
                            <option value="Ejisu">Ejisu</option>
                            <option value="Juaben">Juaben</option>
                            <option value="Ejura-Sekyedumase">Ejura-Sekyedumase</option>
                            <option value="Mampong">Mampong</option>
                            <option value="Asokwa">Asokwa</option>
                            <option value="Bantama">Bantama</option>
                            <option value="Nhyiaeso">Nhyiaeso</option>
                            <option value="Oforikrom">Oforikrom</option>
                            <option value="Old Tafo">Old Tafo</option>
                            <option value="Suame">Suame</option>
                            <option value="Subin">Subin</option>
                            <option value="Manhyia North">Manhyia North</option>
                            <option value="Manhyia South">Manhyia South</option>
                            <option value="Kwadaso">Kwadaso</option>
                            <option value="Kwabre East">Kwabre East</option>
                            <option value="Akrofuom">Akrofuom</option>
                            <option value="Obuasi East">Obuasi East</option>
                            <option value="Obuasi West">Obuasi West</option>
                            <option value="Offinso North">Offinso North</option>
                            <option value="Offinso South">Offinso South</option>
                            <option value="Kumawu">Kumawu</option>
                            <option value="Sekyere Afram plains">Sekyere Afram plains</option>
                            <option value="Nsuta-Kwamang">Nsuta-Kwamang</option>
                            <option value="Afigya Sekyere West">Afigya Sekyere West</option>
                            <option value="Effiduase-Asokore">Effiduase-Asokore</option>
                            <option value="Afigya Sekyere East">Afigya Sekyere East</option>
                            </optgroup>
                            <optgroup label="Ahafo Region">
                                <option value="Asunafo North">Asunafo North</option>
                                <option value="Asunafo South">Asunafo South</option>
                                <option value="Asutifi North">Asutifi North</option>
                                <option value="Asutifi South">Asutifi South</option>
                                <option value="Tano North">Tano North</option>
                                <option value="Tano South">Tano South</option>
                            </optgroup>
                            <optgroup label="Bono Region">
                                <option value="Banda">Banda</option>
                                <option value="Berekum East">Berekum East</option>
                                <option value="Berekum West">Berekum West</option>
                                <option value="Dormaa East">Dormaa East</option>
                                <option value="Dormaa West">Dormaa West</option>
                                <option value="Dormaa Central">Dormaa Central</option>
                                <option value="Jaman North">Jaman North</option>
                                <option value="Jaman South">Jaman South</option>
                                <option value="Sunyani East">Sunyani East</option>
                                <option value="Sunyani West">Sunyani West</option>
                                <option value="Tain">Tain</option>
                                <option value="Wenchi">Wenchi</option>
                            </optgroup>
                            <optgroup label="Bono East Region">
                                <option value="Atebubu-Amantin">Atebubu-Amantin</option>
                                <option value="Kintampo North">Kintampo North</option>
                                <option value="Kintampo South">Kintampo South</option>
                                <option value="Nkoranza North">Nkoranza North</option>
                                <option value="Nkoranza South">Nkoranza South</option>
                                <option value="Pru East">Pru East</option>
                                <option value="Pru West">Pru West</option>
                                <option value="Sene East">Sene East</option>
                                <option value="Sene West">Sene West</option>
                                <option value="Techiman North">Techiman North</option>
                                <option value="Techiman South">Techiman South</option>
                            </optgroup>
                            <optgroup label="Central Region">
                                <option value="Abura-Asebu-Kwamankese">Abura-Asebu-Kwamankese</option>
                                <option value="Agona East">Agona East</option>
                                <option value="Agona West">Agona West</option>
                                <option value="Ajumako-Enyan-Essiam">Ajumako-Enyan-Essiam</option>
                                <option value="Asikuma-Odoben-Brakwa">Asikuma-Odoben-Brakwa</option>
                                <option value="Assin North">Assin North</option>
                                <option value="Assin North">Assin North</option>
                                <option value="Assin Central">Assin Central</option>
                                <option value="Assin South">Assin South</option>
                                <option value="Awutu-Senya East">Awutu-Senya East</option>
                                <option value="Awutu-Senya West">Awutu-Senya West</option>
                                <option value="Cape Coast North">Cape Coast North</option>
                                <option value="Cape Coast South">Cape Coast South</option>
                                <option value="Effutu">Effutu</option>
                                <option value="Gomoa East">Gomoa East</option>
                                <option value="Gomoa Central">Gomoa Central</option>
                                <option value="Gomoa West">Gomoa West</option>
                                <option value="Komenda-Edina-Eguafo-Abirem">Komenda-Edina-Eguafo-Abirem</option>
                                <option value="Mfantseman East">Mfantseman East</option>
                                <option value="Mfantseman West">Mfantseman West</option>
                                <option value="Hemang Lower Denkyira">Hemang Lower Denkyira</option>
                                <option value="Twifo-Atii Morkwaa">Twifo-Atii Morkwaa</option>
                                <option value="Upper Denkyira East">Upper Denkyira East</option>
                                <option value="Upper Denkyira West">Upper Denkyira West</option>
                            </optgroup>
                            <optgroup label="Eastern Rgion">
                                <option value="Akuapem North">Akuapem North</option>
                                <option value="Okere">Okere</option>
                                <option value="Akwapim South">Akwapim South</option>
                                <option value="Nsawam Adoagyiri">Nsawam Adoagyiri</option>
                                <option value="Ofoase-Ayirebi">Ofoase-Ayirebi</option>
                                <option value="Asuogyaman">Asuogyaman</option>
                                <option value="Atiwa East">Atiwa East</option>
                                <option value="Atiwa West">Atiwa West</option>
                                <option value="Akim Oda">Akim Oda</option>
                                <option value="Asene Akroso-Manso">Asene Akroso-Manso</option>
                                <option value="Abirem">Abirem</option>
                                <option value="Akim Swedru">Akim Swedru</option>
                                <option value="Achiase">Achiase</option>
                                <option value="Akim Abuakwa North">Akim Abuakwa North</option>
                                <option value="Akim Abuakwa South">Akim Abuakwa South</option>
                                <option value="Fanteakwa North">Fanteakwa North</option>
                                <option value="Fanteakwa South">Fanteakwa South</option>
                                <option value="Akwatia">Akwatia</option>
                                <option value="Kade">Kade</option>
                                <option value="Abetifi">Abetifi</option>
                                <option value="Afram Plains North">Afram Plains North</option>
                                <option value="Afram Plains South">Afram Plains South</option>
                                <option value="Mpraeso">Mpraeso</option>
                                <option value="Nkawkaw">Nkawkaw</option>
                                <option value="Lower Manya">Lower Manya</option>
                                <option value="New Juaben North">New Juaben North</option>
                                <option value="New Juaben South">New Juaben South</option>
                                <option value="Ayensuano">Ayensuano</option>
                                <option value="Suhum">Suhum</option>
                                <option value="Upper Manya">Upper Manya</option>
                                <option value="Lower West Akim">Lower West Akim</option>
                                <option value="Upper West Akim">Upper West Akim</option>
                                <option value="Yilo Krobo">Yilo Krobo</option>
                            </optgroup>
                            <optgroup label="Greater Accra Region">
                                <option value="Ablekuma Central">Ablekuma Central</option>
                                <option value="Ablekuma North">Ablekuma North</option>
                                <option value="Ablekuma South">Ablekuma South</option>
                                <option value="Ablekuma West">Ablekuma West</option>
                                <option value="Ayawaso Central">Ayawaso Central</option>
                                <option value="Ayawaso East">Ayawaso East</option>
                                <option value="Ayawaso North">Ayawaso North</option>
                                <option value="Ayawaso West Wuogon">Ayawaso West Wuogon</option>
                                <option value="Dade Kotopon">Dade Kotopon</option>
                                <option value="Domeabra-Obom">Domeabra-Obom</option>
                                <option value="Korle Klottey">Korle Klottey</option>
                                <option value="Odododiodoo">Odododiodoo</option>
                                <option value="Okaikwei North">Okaikwei North</option>
                                <option value="Okaikwei Central">Okaikwei Central</option>
                                <option value="Okaikwei South">Okaikwei South</option>
                                <option value="Adenta">Adenta</option>
                                <option value="Ashaiman">Ashaiman</option>
                                <option value="Ada">Ada</option>
                                <option value="Sege">Sege</option>
                                <option value="Ningo-Prampram">Ningo-Prampram</option>
                                <option value="Abokobi-Madina">Abokobi-Madina</option>
                                <option value="Dome-Kwabenya">Dome-Kwabenya</option>
                                <option value="Trobu">Trobu</option>
                                <option value="Amasaman">Amasaman</option>
                                <option value="Weija-Gbawe">Weija-Gbawe</option>
                                <option value="Bortianor-Ngleshie-Amanfrom">Bortianor-Ngleshie-Amanfrom</option>
                                <option value="Anyaa-Sowutuom">Anyaa-Sowutuom</option>
                                <option value="Krowor">Krowor</option>
                                <option value="Ledzokuku">Ledzokuku</option>
                                <option value="Kpone-Katamanso">Kpone-Katamanso</option>
                                <option value="Shai-Osudoku">Shai-Osudoku</option>
                                <option value="Tema East">Tema East</option>
                                <option value="Tema Central">Tema Central</option>
                                <option value="Tema West">Tema West</option>
                            </optgroup>
                            <optgroup label="Savannah Region">
                                <option value="Bole">Bole</option>
                                <option value="Yapei-Kusawgu">Yapei-Kusawgu</option>
                                <option value="Salaga North">Salaga North</option>
                                <option value="Salaga South">Salaga South</option>
                                <option value="Damango">Damango</option>
                                <option value="Daboya-Mankarigu">Daboya-Mankarigu</option>
                                <option value="Sawla-Tuna-Kalba">Sawla-Tuna-Kalba</option>
                                <option value="Tolon">Tolon</option>
                                <option value="Kumbungu">Kumbungu</option>
                            </optgroup>
                            <optgroup label="North East Region">
                                <option value="Bunkpurugu">Bunkpurugu</option>
                                <option value="Yunyoo">Yunyoo</option>
                                <option value="Chereponi">Chereponi</option>
                                <option value="Walewale">Walewale</option>
                                <option value="Yagaba-Kubori (Walewale West)">Yagaba-Kubori (Walewale West)</option>
                                <option value="Nalerigu">Nalerigu</option>
                            </optgroup>
                            <optgroup label="Northern Region">
                                <option value="Gushegu">Gushegu</option>
                                <option value="Karaga">Karaga</option>
                                <option value="Kpandai">Kpandai</option>
                                <option value="Bimbilla">Bimbilla</option>
                                <option value="Wulensi">Wulensi</option>
                                <option value="Saboba">Saboba</option>
                                <option value="Nanton">Nanton</option>
                                <option value="Savelugu">Savelugu</option>
                                <option value="Sawla-Tuna-Kalba">Sawla-Tuna-Kalba</option>
                                <option value="Tamale Central">Tamale Central</option>
                                <option value="Tamale North">Tamale North</option>
                                <option value="Sagnarigu">Sagnarigu</option>
                                <option value="Tamale South">Tamale South</option>
                                <option value="Tolon">Tolon</option>
                                <option value="Kumbungu">Kumbungu</option>
                                <option value="Mion">Mion</option>
                                <option value="Yendi">Yendi</option>
                                <option value="Zabzugu">Zabzugu</option>
                                <option value="Tatale-Sanguli">Tatale-Sanguli</option>
                            </optgroup>
                            <optgroup label="Upper East Region">
                                <option value="Bawku Central">Bawku Central</option>
                                <option value="Binduri">Binduri</option>
                                <option value="Pusiga">Pusiga</option>
                                <option value="Zebilla">Zebilla</option>
                                <option value="Bolgatanga Central">Bolgatanga Central</option>
                                <option value="Bolgatanga East">Bolgatanga East</option>
                                <option value="Bongo">Bongo</option>
                                <option value="Builsa North">Builsa North</option>
                                <option value="Builsa South">Builsa South</option>
                                <option value="Garu">Garu</option>
                                <option value="Tempane">Tempane</option>
                                <option value="Chiana-Paga">Chiana-Paga</option>
                                <option value="Navrongo Central">Navrongo Central</option>
                                <option value="Nabdam">Nabdam</option>
                                <option value="Talensi">Talensi</option>
                            </optgroup>
                            <optgroup label="Upper West Region">
                                <option value="Jirapa">Jirapa</option>
                                <option value="Lambussie">Lambussie</option>
                                <option value="Lawra">Lawra</option>
                                <option value="Nandom">Nandom</option>
                                <option value="Nadowli East">Nadowli East</option>
                                <option value="Nadowli West">Nadowli West</option>
                                <option value="Sissala East">Sissala East</option>
                                <option value="Sissala West">Sissala West</option>
                                <option value="Wa East">Wa East</option>
                                <option value="Wa Central">Wa Central</option>
                                <option value="Wa West">Wa West</option>
                            </optgroup>
                            <optgroup label="Oti Region">
                                <option value="Biakoye">Biakoye</option>
                                <option value="Buem">Buem</option>
                                <option value="Akan">Akan</option>
                                <option value="Krachi East">Krachi East</option>
                                <option value="Krachi West">Krachi West</option>
                                <option value="Krachi Nchumuru">Krachi Nchumuru</option>
                                <option value="Nkwanta North">Nkwanta North</option>
                                <option value="Nkwanta South">Nkwanta South</option>
                            </optgroup>
                            <optgroup label="Volta Region">
                                <option value="Adaklu">Adaklu</option>
                                <option value="Afadjato South">Afadjato South</option>
                                <option value="Agotime-Ziope">Agotime-Ziope</option>
                                <option value="Akatsi North">Akatsi North</option>
                                <option value="Akatsi South">Akatsi South</option>
                                <option value="Ho Central">Ho Central</option>
                                <option value="Ho West">Ho West</option>
                                <option value="Hohoe South">Hohoe South</option>
                                <option value="Anlo">Anlo</option>
                                <option value="Keta">Keta</option>
                                <option value="Ketu North">Ketu North</option>
                                <option value="Ketu South">Ketu South</option>
                                <option value="Kpando">Kpando</option>
                                <option value="Central Tongu">Central Tongu</option>
                                <option value="North Tongu">North Tongu</option>
                                <option value="North Dayi">North Dayi</option>
                                <option value="South Dayi">South Dayi</option>
                                <option value="South Tongu">South Tongu</option>
                            </optgroup>
                            <optgroup label="Western North Region">
                                <option value="Aowin">Aowin</option>
                                <option value="Suaman">Suaman</option>
                                <option value="Bia East">Bia East</option>
                                <option value="Bia West">Bia West</option>
                                <option value="Juabeso">Juabeso</option>
                                <option value="Bodi">Bodi</option>
                                <option value="Sefwi-Akontombra">Sefwi-Akontombra</option>
                                <option value="Sefwi Wiawso">Sefwi Wiawso</option>
                                <option value="Bibiani-Anhwiaso-Bekwai">Bibiani-Anhwiaso-Bekwai</option>
                            </optgroup>
                            <optgroup label="Western Region">
                                <option value="Amenfi Central">Amenfi Central</option>
                                <option value="Amenfi East">Amenfi East</option>
                                <option value="Ahanta West">Ahanta West</option>
                                <option value="Ellembelle">Ellembelle</option>
                                <option value="Jomoro District">Jomoro District</option>
                                <option value="Jomoro">Jomoro</option>
                                <option value="Mpohor">Mpohor</option>
                                <option value="Wassa East">Wassa East</option>
                                <option value="Evalue-Gwira">Evalue-Gwira</option>
                                <option value="Prestea-Huni Valley">Prestea-Huni Valley</option>
                                <option value="Effia">Effia</option>
                                <option value="Kwesimintsim">Kwesimintsim</option>
                                <option value="Essikado-Ketan">Essikado-Ketan</option>
                                <option value="Sekondi">Sekondi</option>
                                <option value="Takoradi">Takoradi</option>
                                <option value="Shama">Shama</option>
                                <option value="Tarkwa-Nsuaem">Tarkwa-Nsuaem</option>
                                <option value="Amenfi East">Amenfi East</option>
                                <option value="Amenfi West">Amenfi West</option>
                            </optgroup>
						</select>
					</div>
                    <div class="form-wrapper">
						<label for="">Voter's ID</label>
						<input type="number" class="form-control" name="Voters' ID" size="10">
					</div>
					<button>Register Now</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>