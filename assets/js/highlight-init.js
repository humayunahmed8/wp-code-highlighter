jQuery(document).ready(function($){
  hljs.addPlugin(
    new CopyButtonPlugin({})
  );
  const snippets = document.querySelectorAll('.hljs-copy-wrapper');
    snippets.forEach(snippet => {
      const code = snippet.querySelector('code');
      const languageName = snippet.querySelector('.language-name');
      const language = code.getAttribute('data-language');
      languageName.textContent = language;
  });
  hljs.highlightAll();
});

