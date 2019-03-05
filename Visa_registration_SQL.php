<!DOCTYPE html>
<html >
<head>
	<meta http-equiv="content-type" content ="text/html;charset=utf-8">
	<title>test fotm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<div class ="up">
<h2> Регистрационная форма</h2>
<form name="Visa_registration" method="post" action ="add.php"  enctype="multipart/form-data">
    <!-- Название элемента input определяет имя в массиве $_FILES -->
	<h2><span>Имя:</span></h2>
    	<h1><input type="text" name="name"></h1>
	<h2><span>Фамилия:</span></h2>
    	<h1><input type="text" name="middlename"></h1>

	<h2><span>Отчество:</span></h2>
    	<h1><input type="text" name="lastname"></h1>
<hr size ="1">
</div>
<div class ="menu">
	<h2>Цель визита:</h2>
	<h1 align = "center" margin="70px">
		<input  name="radiobutton" type ="radio" value ="1">ПМЖ
		<input name = "radiobutton" type = "radio" value = "2">Работа
		<input name = "radiobutton" type = "radio" value = "3">Временный визит
	</h1>
    <span><h2>Электронный адрес:</h2></span>
	<h1><input align = "center" type="text" name="mail"><h1>
	</p>
	<span><h2>Номер телефона:</h2></span>
		<input type="text" name="phone">
		<h2>Выберите способ котрым можно связаться с Вами:</h2>
		<h1>
		<input type="checkbox" name="contact1" value="1">Электронная почта
		<input type="checkbox" name="contact2" value="1">Мобильный телефон
	</h1>

<hr size ="1">
<h1>
	    Фото паспорта: <input name="picture" type="file" />
	</h1>
	<h1>
    	Таблица с доходами?: <input name="xls" type="file" />
</h1>
<h1>
   		 HTML на регистрацию визы???: <input name="html" type="file" />
   		</h1>

<hr size ="1">
	<p>
		<h2>Выберите ваш город:</h2>
		<select name = "city">

			<option value ="Одесса"  >Одесса</option>
			<option value ="Киев" >Киев</option>
			<option value ="Харьков" >Харьков</option>
			<option value ="Львов" >Львов</option>
			<option value ="Донецк" >Донецк</option>
			<option value ="Днепр" >Днепр</option>
			<option value= "Запорожье" >Запорожье</option>

		</select>
	</p>

	<br>

</br>

	     <details><h1>Гражданам других стран, которые официально проживают на территории Украины, необходимо предоставить оригинал и копию документа, который дает разрешение на пребывание в Украине, вид на постоянное или временное проживание.Также иностранные граждане обязательно должны иметь отметку в загранпаспорте о выдаче вида на жительство в Украине с серией, номером и сроком действия вида.Вид на временное пребывание в Украине должен быть действительным минимум три месяца после запланированной даты возвращения в Украину.Посольство или Генеральное Консульство имеет право:запросить любые дополнительные документы (cтатья 21/8 Шенгенского Визового Кодекса)пригласить Заявителя на собеседование (статья 21/8 Шенгенского Визового Кодекса)</h1></details>

	 </div>
	
		<h1><input style="width:300px;height:75px;" name="sumbit" type = "submit" value="Отправить данные"></h1>
		<h1><a href="delete.php?name=<?php echo $row['name']?>"> Удалить </a></h1>
			<aside>
   Контактны
    <aside>(048) 700-5156</aside>
    <aside>(063) 700-5351</aside>

</aside>
<?php
// Check connection
$mysqli = mysqli_connect("localhost","root","","Visa_bd");
$mysqli->query("SET NAMES 'utf8'");
$sql = "CREATE TABLE people_base (
name VARCHAR(30) , 
middlename VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
task VARCHAR(50),
mail VARCHAR(50),
phone VARCHAR(30),
pasp VARCHAR(30)
)";
mysqli_query($mysqli, $sql);
?>
</form>
</body>
</html>
