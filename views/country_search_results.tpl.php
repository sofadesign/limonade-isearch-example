<?= render('country_search.tpl.php'); ?>
<? if(!empty($countries)): ?>
<ul id="countries" selected="true">
  <? foreach($countries as $country): ?>
    <li><?=$country;?></li>
  <? endforeach; ?>
</ul>
<? endif; ?>