<?
$arCatalog = array(
    array(
        "NAME" => "Улитка на прогулке",
        "TEXT" => "Творческие наборы",
        "IMG" => "content/catalog/item1.png",
        "PRICE" => "520"
    ),
    array(
        "NAME" => "Остров сокровищ",
        "TEXT" => "3D рамки",
        "IMG" => "content/catalog/item2.png",
        "PRICE" => "1520"
    ),
    array(
        "NAME" => "2079 Фикси-магниты \"НОЛИК\"",
        "TEXT" => "Фиксики очень хорошие",
        "IMG" => "content/catalog/item1.png",
        "PRICE" => "12520"
    ),
    array(
        "NAME" => "Фея бабочек",
        "TEXT" => "Феи",
        "IMG" => "content/catalog/item2.png",
        "PRICE" => "990",
        "PRICE_OLD" => "1990",
    ),
    array(
        "NAME" => "Детство",
        "TEXT" => "Детство",
        "IMG" => "content/catalog/item2.png",
        "PRICE" => "420"
    ),
    array(
        "NAME" => "2079 Фикси-магниты \"НОЛИК\"",
        "TEXT" => "Фиксики очень хорошие",
        "IMG" => "content/catalog/item1.png",
        "PRICE" => "2520"
    ),
    array(
        "NAME" => "Улитка на прогулке",
        "TEXT" => "Творческие наборы",
        "IMG" => "content/catalog/item1.png",
        "PRICE" => "320"
    ),
    array(
        "NAME" => "Фея бабочек",
        "TEXT" => "Феи",
        "IMG" => "content/catalog/item2.png",
        "PRICE" => "220"
    )
);
$i = 0;
echo '<div class="row catalog">';
foreach ($arCatalog as $item){
	$i++;
	if($i <= 4) {
		echo '<div class="col-lg-3 cart">';
	} else {
		echo '</div>';
		echo '<div class="row">';
		echo '<div class="col-lg-3 cart">';
		$i = 0;
	}
	echo '<div class="cart_image">';
	echo '<img src='.$item['IMG'].'>';
	echo '</div>';
	echo '<div class="cart_name">';
	echo $item['NAME'];
	echo '</div>';
	echo '<div class="cart_text">';
	echo $item['TEXT'];
	echo '</div>';
	echo '<div class="cart_price">';
	if(isset($item['PRICE_OLD'])) {
		echo '<div class="cart_price_old">';
		echo $item['PRICE_OLD'];
		echo '</div>';
	}
	echo $item['PRICE'];
	echo '</div>';
	echo '<div class="">';
	echo '<a class="btn cart_button cart_link" href="#">ПОДРОБНЕЕ О ТОВАРЕ</a>';
	echo '</div>';
	echo '</div>';
}
?>