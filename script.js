document.addEventListener('DOMContentLoaded', () => {
    console.log('Portfolio website loaded');
});

function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
}
