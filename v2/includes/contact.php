<section id="contact" class="contact container">
                <div class="col-12 text-center mb-1 mb-lg-5">
                    <h2 class="contact__title">Kontakt</h2>
                </div>
                <form id="form" class="form col-12 col-lg-8 mx-auto d-flex flex-column  row p-0 g-0 " action="#" autocomplete="off">
                    <div class="form__single col-12">
                        <label for="name" class="form-label">Imię</label>
                        <input class="form__controle" type="text" name="name" id="name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form__single col-12">
                        <label for="tel" class="form-label">Telefon</label>
                        <input class="form__controle" type="tel" name="tel" id="tel">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form__single col-12">
                        <label for="message" class="form-label">Wiadomość</label>
                        <textarea class="form__controle" type="textarea" rows="4" cols="50" name="message" id="message"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <input class="form__important" type="text" name="important" id="important"></input>
                    <div class="mb-3 text-center">
                        <div class="errors-list" role="alert"></div>
                        <div id="loader"></div>
                        <input name="submit" id="submit" class="btn btn-submit" type="submit" value="WYŚLIJ">
                        <p class="form__resp text-right"></p>
                        <ul class="form__errors"></ul>
                    </div>
                </form>
            </section>