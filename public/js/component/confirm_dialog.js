export default class ConfirmDialog{
    constructor() {
        this.div = document.createElement("div");
        this.div.classList.add("confirm-overlay");

        this.div.innerHTML =
        `
            <div class="confirm-box">
                <h2 id="confirm-header"></h2>
                <p id="confirm-message"></p>
                <div class="confirm-buttons">
                    <button class="confirm-btn confirm-no" id="confirmNo"></button>
                    <button class="confirm-btn confirm-yes" id="confirmYes"></button>
                </div>
            </div>
        `
        
        this.css = document.createElement("link")
        this.css.rel = "stylesheet"
        this.css.href = "/css/component/confirm.css"

        document.body.appendChild(this.css)
        document.body.appendChild(this.div);
    }

    confirmAction(header, message, notext, yestext, yesBtn, yesCallback) {
        return new Promise((resolve) => {
            const overlay = this.div;
            const confirmBox = overlay.querySelector(".confirm-box");

            overlay.querySelector("#confirm-header").innerHTML = `<span>⚠️</span>${header}`;
            overlay.querySelector("#confirm-message").innerHTML = message;

            const btnNo = overlay.querySelector("#confirmNo");
            let btnYes = overlay.querySelector("#confirmYes");

            if (yesBtn == null || yesBtn == undefined || yesBtn == "") {
                yesBtn = '<button class="confirm-btn confirm-yes" id="confirmYes"></button>'
            }
            let newBtnYes = document.createElement("template");
            newBtnYes.innerHTML = yesBtn;
            newBtnYes = newBtnYes.content.firstChild;

            btnYes.replaceWith(newBtnYes);
            
            btnYes = overlay.querySelector("#confirmYes");

            btnNo.innerHTML = notext;
            btnYes.innerHTML = yestext;

            document.body.style.overflow = "hidden";
            overlay.style.display = "flex";
            
            // คลิก No
            async function btnSettings(){
                confirmBox.classList.add("confirm-box-close");
                setTimeout(() => {
                    confirmBox.classList.remove("confirm-box-close");
                    overlay.style.display = "none";
                    document.body.style.overflow = "";
                }, 250);
                return resolve();
            }

            btnNo.onclick = async () => {
                await btnSettings();
            };

            // คลิก Yes
            btnYes.onclick = async () => {
                await btnSettings();
                await yesCallback();
            };
        });
    }
}