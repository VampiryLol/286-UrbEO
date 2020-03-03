<?
/*
function treeOut($tree) 
{
	$markup = '';
	foreach ($tree as $branch => $twig) {
		$markup .= '<li>' . ((is_array($twig)) ? $branch . treeOut($twig) : $twig) . '</li>';
	}
	return '<ul>' . $markup . '</ul>';
}

$tree = array(
	'test0',
	'test1' => array(
		'test1.1',
		'test1.2' => array(
			'test1.2.1'
		)
	),
	'test3'
);

echo treeOut($tree);
*/

function recurse($itemslist = true) 
{
	$markup = " ";
	foreach ($itemslist as $branch => $twig) {
		$markup .= "<li>" . ((is_array($twig)) ? $branch . recurse($twig) : $twig) . "</li>";
	}

	return "<ul>" . "<li>" . "first" . "<ul>" . "<li>" . "jngjsg" . "</li>" . "<li>" . "jngjsg2" . "</li>" . "</ul>" . "</li>" . "</ul>";

	/*if(items > 0) {
		recurse($items);
	} else {
		return false;
	}*/
}


$itemslist = array(
	"name",
	"id" => 1,
	"items" => array(
			"name" => "jngjsg",
			"id" => 2,
			"items" => 0
	),
	"name" => "jngjsg2",
	"id" => 3,
	"items" => 0
);

/*<ul>
	<li> 
		first 
		<ul>
			<li>akjlkjsld</li>
			<li>akjlkjsld2</li>
		</ul>
	</li>
</ul>
*/

echo recurse($itemslist);
