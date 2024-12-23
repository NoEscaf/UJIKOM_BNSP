// Add event listener for button (if needed)
const learnMoreButton = document.querySelector(".button-up");
const buttonUpAmount = 5;

learnMoreButton.addEventListener("mouseover", () => {
    learnMoreButton.style.transform = `translateY(-${buttonUpAmount}px)`;
});

learnMoreButton.addEventListener("mouseout", () => {
    learnMoreButton.style.transform = `translateY(0)`;
});