<?php
function renderTemplate($templateFile, $variables) {
  $templateContent = file_get_contents($templateFile);
  foreach ($variables as $key => $value) {
    $templateContent = str_replace('{' . $key . '}', $value, $templateContent);
  }
  return $templateContent;
}
$category = $_GET['category'];
$page = '';

$items =json_decode(file_get_contents('http:./API/items.php'), true);
$items_html = '<div class="items">';

foreach($items as $item){
    foreach ($item as $current)
    {
        $items_html = $items_html . renderTemplate('static/templates/item.html', [
        'IMG' => $current['img'],
        'TITLE' => $current['title'],
        'DESCRIPTION' => $current['description'],
        'PRICE' => $current['price_dollars'] . '$',
        'COLOR' => $current['color'],
        ]);
    }
}
$items_html = $items_html . '</div>';
switch($category)
{
    case 'catalog':
        $page = renderTemplate('static/templates/header.html',
        [
            'title' => 'Каталог',
            'catalogActivity' => 'active',
            'CONTENT' => renderTemplate('static/templates/catalog.html', [
                'ITEMS' => $items_html
            ])
        ]);
        break;
    case 'about':
        $page = renderTemplate('static/templates/header.html',
        [
            'title' => 'О нас',
            'aboutActivity' => 'active',
            'CONTENT' => renderTemplate('static/templates/about.html', [])
        ]);
        break;
    case 'mailing':
        $page = renderTemplate('static/templates/header.html',
        [
            'title' => 'Рассылка',
            'mailingActivity' => 'active',
            'CONTENT' => renderTemplate('static/templates/mailing.html', [])
        ]);
        break;
}
print($page);