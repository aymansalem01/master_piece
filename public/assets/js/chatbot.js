

// Load chat history when page loads

window.addEventListener('load', function() {
    let chatbotContainer = document.getElementById("chatbot-container");
    if (chatbotContainer) {
        chatbotContainer.style.display = "none";
    }
});

document.getElementById("chatbot-launcher").addEventListener("click", function() {
    let chatbotContainer = document.getElementById("chatbot-container");
    if (chatbotContainer.style.display === "none" || chatbotContainer.style.display === "") {
        chatbotContainer.style.display = "flex";
    } else {
        chatbotContainer.style.display = "none";
    }
});

document.getElementById("chatbot-close").addEventListener("click", function() {
    document.getElementById("chatbot-container").style.display = "none";
});


const navToggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('nav');

if (navToggle && nav) {
    navToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
        navToggle.classList.toggle('active');
    });
}

