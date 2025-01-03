const contentItems = document.querySelectorAll(".card-campaigns");
const paginationLinks = document.querySelectorAll(".page-link[data-page]");
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");

const itemsPerPage = 3; // Quantidade de divs por página
const totalPages = Math.ceil(contentItems.length / itemsPerPage);

let currentPage = 1;

function updatePagination(page) {
    currentPage = page;

    // Mostra as divs correspondentes à página atual
    contentItems.forEach((item, index) => {
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        if (index >= start && index < end) {
          item.classList.remove("hidden");
        } else {
          item.classList.add("hidden");
        }
    });

    // Atualiza a aparência dos links
    paginationLinks.forEach(link => {
        link.classList.toggle("active", parseInt(link.dataset.page) === currentPage);
    });

    // Habilita/Desabilita botões de navegação
    prevBtn.classList.toggle("disabled", currentPage === 1);
    nextBtn.classList.toggle("disabled", currentPage === totalPages);
}

// Adiciona eventos aos links de paginação
paginationLinks.forEach(link => {
    link.addEventListener("click", (e) => {
    e.preventDefault();
    const page = parseInt(link.dataset.page);
    updatePagination(page);
    });
});

// Eventos para os botões de voltar e avançar
prevBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (currentPage > 1) updatePagination(currentPage - 1);
});

nextBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (currentPage < totalPages) updatePagination(currentPage + 1);
});

// Inicializa com a página 1
updatePagination(1);
