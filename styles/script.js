// Toggle sidebar open/close with the same button
document.getElementById("togglebtn").onclick = function() {
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("main-content");

    sidebar.classList.toggle("closed");
    mainContent.classList.toggle("closed");
};
