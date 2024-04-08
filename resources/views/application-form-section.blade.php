<div class="application-form-section">
  <div class="container">
    <p class="title">ОСТАВИТЬ ЗАЯВКУ / ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</p>
    <form class="form main_form">
      <div class="form_item">  
        <div class="name">
          <input type="text" class="form-control" required>
          <div class="placeholder">Имя<span> *</span></div>
        </div>
        <div class="question">
          <textarea type="text" class="form-control textarea" required></textarea>
          <div class="placeholder">Задать вопрос<span> *</span></div>
        </div>
        <div class="fone">
          <input type="text" class="form-control" required>
          <div class="placeholder">Телефон<span> *</span></div>
        </div>
      </div>
      <div class="form_item">
        <div class="custom-checkboxes">
          <div class="custom-checkbox-wrapper">
            <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-agree-callback-modal" checked required>
            <label for="checkbox-agree-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Согласен на обработку персональных данных</span>
          </div>
          <div class="custom-checkbox-wrapper mb50">
            <input type="checkbox" name="checkbox-read" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-read-callback-modal" checked required>
            <label for="checkbox-read-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Ознакомлен с <a href="/politika-konfidencialnosti" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
          </div>
        </div>
        @csrf
        <button type="button" class="btn_push">ОТПРАВИТЬ</button>
      </div>
    </form>
  </div>
</div>