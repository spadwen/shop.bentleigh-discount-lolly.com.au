<?php
global $theme_sidebars;
$places = array();
foreach ($theme_sidebars as $sidebar){
    if ($sidebar['group'] !== 'top')
        continue;
    $widgets = theme_get_dynamic_sidebar_data($sidebar['id']);
    if (!is_array($widgets) || count($widgets) < 1)
        continue;
    $places[$sidebar['id']] = $widgets;
}
$place_count = count($places);
$needLayout = ($place_count > 1);
if ($place_count > 0) {
    if ($needLayout) {
?>
<div class="bdls-content-layout">
    <div class="bdls-content-layout-row">
        <?php 
    }
            foreach ($places as $widgets) { 
                if ($needLayout) {
            ?>
            <div class="bdls-layout-cell bdls-layout-cell-size<?php echo $place_count; ?>">
               <?php 
               }
               foreach ($widgets as $widget) {
                    theme_print_widget($widget);
               } 
               if ($needLayout) {
               ?>
            </div>
        <?php 
            }
        } 
    if ($needLayout) {    
        ?>
    </div>
</div>
<?php
    }
}
