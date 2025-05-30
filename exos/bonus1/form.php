<main class="cam-shop">    
    <section class="cam-shop__form-new-order">
        <form action="" method="post">
            <legend class="cam-shop__form-new-order__title">
                Achète un Caméléon !
            </legend>
            <fieldset class="cam-shop__form-new-order__fieldset">
                <div>
                    <label for="customer-email"><strong>Ton email ici :</strong></label><br>
                    <input type="email" name="customer-email" id="customer-email">
                </div>
                <div>
                    <label><strong>Quel type de caméléon veux-tu :</strong></label><br>
                    <?php foreach ($types as $code => $typeName) : ?>
                        <div>
                            <label class="choice" for="<?=$code ?>">
                                <input type="radio" name="type" id="<?=$code ?>" value="<?=$code ?>">
                                <?=$typeName ?>
                            </label>
                        </div>
                    <?php endforeach ?>
                </div>
                <div>
                    <label for="logo-color"><strong>La couleur de ton caméléon :</strong></label><br>
                    <input type="color" name="logo-color" id="logo-color" list="logo-color">
                </div>
                <div>
                    <input type="submit" name="form-new-order" value="COMMANDER">
                </div>
            </fiedset>
        </form>
    </section>
