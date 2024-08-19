document.querySelectorAll(".btn-editar").forEach((editBtn) => {
  editBtn.addEventListener("click", () => {
    const ventanaModal = document.querySelector(".ventana-modal");
    ventanaModal.classList.remove("oculto");

    const editContent = document.createElement("DIV");

    const closeBtn = document.querySelector(".ventana-modal .close");
    closeBtn.addEventListener("click", () => {
      document
        .querySelector(".ventana-modal__content")
        .removeChild(editContent);
      ventanaModal.classList.add("oculto");
    });

    editContent.innerHTML = ` 
      <form action="" method="post">
          <p>Editar producto</p>
          <label for="">Nombre</label>
          <input name="nombreProd" type="text" value="${editBtn.getAttribute(
            "NombreProd"
          )}">
          <label for="">Descripcion</label>
          <input name="descProd" type="text" value="${editBtn.getAttribute(
            "desc"
          )}">
          <label for="">Categoria</label>
          <input name="categProd" type="text" value="${editBtn.getAttribute(
            "categ"
          )}">
          <label for="">Stock</label>
          <input name="stockProd" type="text" value="${editBtn.getAttribute(
            "stock"
          )}">
          <label for="">Precio</label>
          <input name="precioProd" type="text" value="${editBtn.getAttribute(
            "precio"
          )}">
          <input name="idProd" style="display:none"  type="text" value="${editBtn.getAttribute(
            "idProd"
          )}">
          <button name="edit-submit" type="submit" class="Submit-Edit">Guardar cambios</button>
      </form>
    `;

    document.querySelector(".ventana-modal__content").appendChild(editContent);
  });
});
