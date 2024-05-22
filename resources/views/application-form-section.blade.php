<div id="application-form-section" class="application-form-section">
  <div class="container">
    <div class="title">ОСТАВИТЬ ЗАЯВКУ / ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div>
    <form id="application-form" class="form main_form" method="post">
      <div class="form_item_1">  
        <div class="form-group">
          <input type="text" name="name" id="name-application-form" class="input-field js-input-name" required minlength="3" maxlength="20" placeholder="Имя *">
        </div>
        <div class="form-group">
          <textarea type="text" name="text" id="text-application-form" class="input-field textarea js-input-text" required minlength="3" maxlength="200" placeholder="Задать вопрос *"></textarea>
        </div>
        <div class="form-group">
          <input type="text" name="phone" id="phone-application-form" class="input-field js-input-phone js-input-phone-mask" required size="18" placeholder="Телефон *">
        </div>
      </div>
      <div class="form_item_2">
        <div class="custom-checkboxes">
          <div class="custom-checkbox-wrapper">
            <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-input-checkbox" id="checkbox-agree-callback-modal" checked required>
            <label for="checkbox-agree-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Согласен на обработку персональных данных</span>
          </div>
          <div class="custom-checkbox-wrapper mb25">
            <input type="checkbox" name="checkbox-read" class="custom-checkbox js-input-checkbox" id="checkbox-read-callback-modal" checked required>
            <label for="checkbox-read-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Ознакомлен с <a href="/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
          </div>
        </div>
        <input type="hidden" name="email" class="js-input-email" value="none">
        @csrf
        <button type="button" id="application-submit-btn" class="btn_push orange_btn">ОТПРАВИТЬ</button>
      </div>
    </form>
  </div>
</div>