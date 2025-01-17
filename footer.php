</div>
<footer class="bg-light text-center py-3 mt-4">
  <p>&copy;  Meu Site. Todos os direitos reservados.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document.getElementById('userform').addEventListener('submit', async function(event) {
    event.preventDefault(); // Evita o envio padrão do formulário

    const formData = new FormData(this);
    const response = await fetch(this.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.text();

    // Atualiza o conteúdo do modal com a resposta do servidor
    document.getElementById('messageModalBody').innerText = result;

    // Mostra o modal
    const modal = new bootstrap.Modal(document.getElementById('messageModal'));
    modal.show();
  });
</script>
</body>
</html>