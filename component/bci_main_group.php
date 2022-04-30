<div class="group_info">
                <div class="group_title inner_box">
                    <h2>Gafadi</h2>
                    <!-- <i class="fa fa-plus-circle"></i> -->
                </div>
                <div class="bio">
                    <p>yo group high level gafadi ko lagi mattra ho kripaya dhayanma raknnu hoss</p>
                </div>
                <div id="qr_code">
                 
                </div>
                <div class="invitation_code inner_box">
                    <script>
                        //value of text must be same as element id of which we want to copy its content
                        let text = 'invite_code';
                        let btn = 'button';
                    </script>
                    <div class="copy_code inner_box_v2"><p id="invite_code">39kd0k3kdjdks</p><i class="fa fa-clone" id="button" onclick="copyText(text,btn)"></i></div>                
                    <div class="mob_member_btn"><strong>members</strong></div>
                </div>
            </div>
          <script src="../js/copy_text.js"></script>
          <script src="../js/qrcode.js"></script>
            <script type="text/javascript">
                let code = document.querySelector('#invite_code');
                let code_text = code.textContent;

                let qrcode = new QRCode(document.querySelector('#qr_code'), {
                text: code_text,
                width: 200,
                height: 200,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });

            window.onload() = ()=>{
                qrcode.makeCode(code_text);
            };
            </script>