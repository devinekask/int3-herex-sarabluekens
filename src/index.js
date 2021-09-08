require('./style.css');
require('@tensorflow-models/handpose');

require('@tensorflow/tfjs-backend-webgl');

{

  const init = () => {
    const $cartform = document.querySelector(`#cartform`);
    if ($cartform) {
      $cartform.addEventListener(`submit`, handleSubmitCartForm);
    }
  };


  const handleSubmitCartForm = e => {
    const $form = e.currentTarget;
    e.preventDefault();
    postOrder($form);
  };

  const postOrder = async $form => {

    const response = await fetch($form.getAttribute('action'), {
      method: 'POST',
      headers: new Headers({
        Accept: 'application/json'
      }),
      body: new FormData($form)
    });

    const returned = await response.json();
    handleReturnSubmit(returned);

  };

  const handleReturnSubmit = () => {
    const $errorText = document.querySelector(`.error--text`);
    $errorText.textContent = '';
  };
  init();
}
