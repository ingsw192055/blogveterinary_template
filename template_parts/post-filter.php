<?php     

$query = service_services_group_all();

$group_post = $query->posts;
$tax= $query->tax_query;


$author_var = $_GET['authors'] ? $_GET['authors'] : null;
$country_var = $_GET['country'] ? $_GET['country'] : null;
$sector_var = $_GET['sectors'] ? $_GET['sectors'] : null;


$country = get_terms( array(
  'taxonomy' => 'country',
  'hide_empty' => false,
) );

$authors = get_terms( array(
  'taxonomy' => 'author',
  'hide_empty' => false,
) );

$sector = get_terms( array(
  'taxonomy' => 'sector',
  'hide_empty' => false,
) );



 
?>

<div class="row justify-content-center">
        <form action="" class="form-search col-lg-10 col-md-12">
          <input type="hidden" name="s" value="">
          <div class="row align-items-end">
            <div class="col-lg-3">
              <label for="list-types">Paese</label>
              <div class="select-wrap">
                <select name="country" class="form-control d-block rounded-0">
                <option value="" selected>Seleziona Paese</option>
                <?php foreach ($country as $paese) : ?>
                  <option value="<?=$paese->name?>" <?= $country_var == $paese->name ? 'selected' : '' ?> ><?=$paese->name  ?></option>
                <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <label for="offer-types">Autore</label>
              <div class="select-wrap">
                <select name="authors" class="form-control d-block rounded-0">
                  <option value="" selected>Seleziona Autore</option>
                  <?php foreach ($authors as $autore) : ?>
                  <option value="<?=$autore->name ?>" <?= $author_var ==  $autore->name ? 'selected' : '' ?>><?=$autore->name ?></option>
                <?php endforeach; ?>
                </select>
              </div>
            </div>
             <div class="col-lg-3">
              <label for="offer-types">Settore</label>
              <div class="select-wrap">
                <select name="sectors" class="form-control d-block rounded-0">
                  <option value="" selected>Seleziona Settore</option>
                  <?php foreach ($sector as $settore) : ?>
                  <option value="<?=$settore->name?>" <?= $sector_var == $settore->name ? 'selected' : '' ?>><?=$settore->name  ?></option>
                <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <input type="submit" class="btn btn-primary text-white btn-block rounded-0" value="Cerca">
            </div>
          </div>
        </form>
    </div>