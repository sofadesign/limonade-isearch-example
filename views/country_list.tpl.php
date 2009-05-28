<ul id="list" title="list" selected="true">
  <? foreach($countries as $country): ?>
    <? if(is_array($country)): ?>
      <li class="group"><?=$country[0];?></li>
    <? else: ?>
      <li><?=$country;?></li>
    <? endif; ?>
  <? endforeach; ?>
</ul>