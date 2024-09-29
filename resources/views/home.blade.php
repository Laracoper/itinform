@extends('inc.layout')



@section('content')
<main class="main">
    <section class="block-main">
        <div class="block-main__content">
            <div class="block-main__container">
                <h1 class="block-main__title">
                    Первый курс по компьютерной сборке
                </h1>
                <div class="block-main__row">
                    <div class="block-main__box">
                        <p class="block-main__number">18</p>
                        <p class="block-main__text">Дней</p>
                    </div>
                    <div class="block-main__box">
                        <p class="block-main__number">18</p>
                        <p class="block-main__text">Часов</p>
                    </div>
                    <div class="block-main__box">
                        <p class="block-main__number">18</p>
                        <p class="block-main__text">Минут</p>
                    </div>
                    <div class="block-main__box">
                        <p class="block-main__number">18</p>
                        <p class="block-main__text">Секунд</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-main__bg">
            <img src="image/main-screen__bgc.png" alt="img">
        </div>
    </section>
    <div class="block-main-bottom">
        <div class="block-main-bottom__container">
            <div class="block-main-bottom__row">
                <button type="button" class="block-main-bottom__btn btn">Заказать курс</button>
                <div class="block-main-bottom__box1">
                    <p class="block-main-bottom__text">
                        Учеников всего:
                        <span>200</span>
                    </p>
                    <p class="block-main-bottom__text">
                        Успешно закончили курс:
                        <span>190</span>
                    </p>
                </div>
                <div class="block-main-bottom__box2">
                    <p class="block-main-bottom__text">
                        Заработано учениками:
                        <span>400000</span>
                    </p>
                    <div class="block-main-bottom__line">

                    </div>
                    <p class="block-main-bottom__text">
                        0
                        <span>1000000</span>
                    </p>
                </div>
            </div>

            <div class="mymodal">
                <div class="mymodal__body">
                    <form action="" class="mymodal__form" method="">
                        <input type="text" placeholder="имя">
                        <input type="email" placeholder="почта">
                        <input type="number" placeholder="телефон">
                        <button type="submit">отправить</button>
                    </form>
                    <div class="mymodal__icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.6066 21.3934C22.2161 21.0029 21.5829 21.0029 21.1924 21.3934C20.8019 21.7839 20.8019 22.4171 21.1924 22.8076L22.6066 21.3934ZM40.9914 42.6066C41.3819 42.9971 42.0151 42.9971 42.4056 42.6066C42.7961 42.2161 42.7961 41.5829 42.4056 41.1924L40.9914 42.6066ZM21.1924 41.1924C20.8019 41.5829 20.8019 42.2161 21.1924 42.6066C21.5829 42.9971 22.2161 42.9971 22.6066 42.6066L21.1924 41.1924ZM42.4056 22.8076C42.7961 22.4171 42.7961 21.7839 42.4056 21.3934C42.0151 21.0029 41.3819 21.0029 40.9914 21.3934L42.4056 22.8076ZM21.1924 22.8076L40.9914 42.6066L42.4056 41.1924L22.6066 21.3934L21.1924 22.8076ZM22.6066 42.6066L42.4056 22.8076L40.9914 21.3934L21.1924 41.1924L22.6066 42.6066Z"
                                fill="black" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <section class="two">
        <div class="two__container">
            <div class="two__img">
                <img src="image/8b992015e8a6b880eae9298c5d3d2ae3.png" alt="img">
            </div>
            <div class="two__text">
                <h2 class="two__title title">
                    Чем мы занимаемся?
                </h2>
                <p class="two__subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget neque, dignissim et feugiat
                    elit augue in suspendisse egestas. Dictum vestibulum mi et sed nunc, orci fermentum
                    vestibulum, morbi. Et neque, adipiscing sapien sem senectus praesent aenean consequat.
                    Aenean facilisi turpis aliquet fringilla. Nunc sem felis sed interdum feugiat mattis elit,
                    sollicitudin. Quam pharetra rhoncus risus, cursus id elementum aliquet. Nullam turpis arcu
                    malesuada arcu interdum placerat nisi, lobortis.
                </p>
            </div>
        </div>
    </section>
    <section class="three">
        <div class="three__container">
            <div class="three__top">
                <h2 class="three__title title">
                    <span class="three__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="127" height="127" viewBox="0 0 127 127"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M84.9901 42.0097C72.9254 29.945 53.3647 29.945 41.3 42.0097L31.2177 31.9273C48.8507 14.2944 77.4394 14.2944 95.0724 31.9273C112.705 49.5603 112.705 78.149 95.0724 95.782L84.9901 85.6997C97.0547 73.635 97.0547 54.0743 84.9901 42.0097Z"
                                fill="url(#paint0_linear_10091_102)" />
                            <defs>
                                <linearGradient id="paint0_linear_10091_102" x1="70.8907" y1="7.74569"
                                    x2="117.15" y2="72.5852" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#DF5950" />
                                    <stop offset="1" stop-color="#451046" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    Быстрый старт
                </h2>
                <p class="three__subtitle">
                    Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                </p>
            </div>
            <div class="three__bottom">
                <div class="three__card">
                    <div class="three__number">100%</div>
                    <div class="three__line three__line_1"></div>
                    <p class="three__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat
                        dui. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, cumque.
                    </p>
                </div>
                <div class="three__card">
                    <div class="three__number">75%</div>
                    <div class="three__line three__line_2"></div>
                    <p class="three__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta,
                        in!
                    </p>
                </div>
                <div class="three__card">
                    <div class="three__number">50%</div>
                    <div class="three__line three__line_3"></div>
                    <p class="three__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat
                        dui. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel vero rerum eaque
                        voluptate! Minima commodi sed corrupti eveniet modi aperiam laborum nobis adipisci.
                        Dignissimos recusandae voluptatibus corrupti tenetur sunt vero.
                    </p>
                </div>
                <div class="three__card">
                    <div class="three__number">итог</div>
                    <div class="three__line three__line_4"></div>
                    <p class="three__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat
                        dui.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="four">
        <div class="four__container">
            <h2 class="four__title title">
                Получите профессию прямо сейчас
            </h2>
            <div class="four__cards">
                <div class="four__card">
                    <div class="four__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <path d="M9.375 20.3125H6.25V12.5H14.0625V15.625H9.375V20.3125Z"
                                fill="url(#paint0_linear_10112_2)" />
                            <path
                                d="M65.625 81.25H62.5V78.125H65.625V81.25ZM59.375 81.25H56.25V78.125H59.375V81.25ZM53.125 81.25H50V78.125H53.125V81.25ZM46.875 81.25H43.75V78.125H46.875V81.25ZM40.625 81.25H37.5V78.125H40.625V81.25ZM34.375 81.25H31.25V78.125H34.375V81.25ZM28.125 81.25H25V78.125H28.125V81.25ZM21.875 81.25H18.75V78.125H21.875V81.25ZM15.625 81.25H12.5V78.125H15.625V81.25ZM9.375 81.25H6.25V78.125H9.375V81.25Z"
                                fill="url(#paint1_linear_10112_2)" />
                            <path
                                d="M65.625 87.5H62.5V84.375H65.625V87.5ZM59.375 87.5H56.25V84.375H59.375V87.5ZM53.125 87.5H50V84.375H53.125V87.5ZM46.875 87.5H43.75V84.375H46.875V87.5ZM40.625 87.5H37.5V84.375H40.625V87.5ZM34.375 87.5H31.25V84.375H34.375V87.5ZM28.125 87.5H25V84.375H28.125V87.5ZM21.875 87.5H18.75V84.375H21.875V87.5ZM15.625 87.5H12.5V84.375H15.625V87.5ZM9.375 87.5H6.25V84.375H9.375V87.5Z"
                                fill="url(#paint2_linear_10112_2)" />
                            <path d="M81.25 12.5H93.75V15.625H81.25V12.5Z" fill="url(#paint3_linear_10112_2)" />
                            <path d="M81.25 18.75H93.75V21.875H81.25V18.75Z"
                                fill="url(#paint4_linear_10112_2)" />
                            <path d="M81.25 25H93.75V28.125H81.25V25Z" fill="url(#paint5_linear_10112_2)" />
                            <path d="M65.625 34.375H57.8125V31.25H62.5V26.5625H65.625V34.375Z"
                                fill="url(#paint6_linear_10112_2)" />
                            <path
                                d="M95.3125 6.25H79.6875C77.0988 6.25 75 8.34885 75 10.9375V65.625H100V10.9375C100 8.34885 97.9012 6.25 95.3125 6.25ZM96.875 62.5H78.125V10.9375C78.125 10.0746 78.8246 9.375 79.6875 9.375H95.3125C96.1754 9.375 96.875 10.0746 96.875 10.9375V62.5Z"
                                fill="url(#paint7_linear_10112_2)" />
                            <path
                                d="M67.1875 71.875H4.6875C2.09885 71.875 0 73.9738 0 76.5625V89.0625C0 91.6512 2.09885 93.75 4.6875 93.75H67.1875C69.7762 93.75 71.875 91.6512 71.875 89.0625V76.5625C71.875 73.9738 69.7762 71.875 67.1875 71.875ZM68.75 89.0625C68.75 89.9254 68.0504 90.625 67.1875 90.625H4.6875C3.82462 90.625 3.125 89.9254 3.125 89.0625V76.5625C3.125 75.6996 3.82462 75 4.6875 75H67.1875C68.0504 75 68.75 75.6996 68.75 76.5625V89.0625Z"
                                fill="url(#paint8_linear_10112_2)" />
                            <path
                                d="M85.9375 71.875C81.6246 71.8803 78.1303 75.3746 78.125 79.6875V85.9375C78.125 90.2519 81.6231 93.75 85.9375 93.75C90.2519 93.75 93.75 90.2519 93.75 85.9375V79.6875C93.7447 75.3746 90.2504 71.8803 85.9375 71.875ZM90.625 85.9375C90.625 88.5262 88.5262 90.625 85.9375 90.625C83.3488 90.625 81.25 88.5262 81.25 85.9375V79.6875C81.2584 77.7084 82.5089 75.9476 84.375 75.2876V81.25H87.5V75.2876C89.3661 75.9476 90.6166 77.7084 90.625 79.6875V85.9375Z"
                                fill="url(#paint9_linear_10112_2)" />
                            <path
                                d="M67.1875 6.25H4.6875C2.09885 6.25 0 8.34885 0 10.9375V48.4375C0 51.0262 2.09885 53.125 4.6875 53.125H26.5625V59.6359C26.561 61.2167 25.2792 62.4985 23.6984 62.5H18.75V65.625H50V62.5H45.0516C43.4708 62.4985 42.189 61.2167 42.1875 59.6359V53.125H67.1875C69.7762 53.125 71.875 51.0262 71.875 48.4375V10.9375C71.875 8.34885 69.7762 6.25 67.1875 6.25ZM28.9566 62.5C29.4373 61.6219 29.689 60.6369 29.6875 59.6359V53.125H32.8125V59.7656H35.9375V53.125H39.0625V59.6359C39.061 60.6369 39.3127 61.6219 39.7934 62.5H28.9566ZM68.75 48.4375C68.75 49.3004 68.0504 50 67.1875 50H4.6875C3.82462 50 3.125 49.3004 3.125 48.4375V40.625H68.75V48.4375ZM68.75 37.5H3.125V10.9375C3.125 10.0746 3.82462 9.375 4.6875 9.375H67.1875C68.0504 9.375 68.75 10.0746 68.75 10.9375V37.5Z"
                                fill="url(#paint10_linear_10112_2)" />
                            <path
                                d="M89.0622 47.097V43.75H85.9372V47.097C82.8901 47.8836 80.9026 50.8141 81.2993 53.936C81.6961 57.058 84.3526 59.3987 87.4997 59.3987C90.6469 59.3987 93.3034 57.058 93.7001 53.936C94.0969 50.8141 92.1094 47.8836 89.0622 47.097ZM87.4997 56.25C86.0875 56.2538 84.8493 55.307 84.4831 53.9429C84.1169 52.5787 84.7135 51.1391 85.9372 50.4341V53.125H89.0622V50.4341C90.286 51.1391 90.8826 52.5787 90.5164 53.9429C90.1502 55.307 88.9119 56.2538 87.4997 56.25Z"
                                fill="url(#paint11_linear_10112_2)" />
                            <path d="M32.8125 43.75H35.9375V46.875H32.8125V43.75Z"
                                fill="url(#paint12_linear_10112_2)" />
                            <defs>
                                <linearGradient id="paint0_linear_10112_2" x1="7.04852" y1="12.5" x2="13.7873"
                                    y2="13.0023" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_10112_2" x1="12.3187" y1="78.125" x2="29.4528"
                                    y2="102.391" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_10112_2" x1="12.3187" y1="84.375" x2="29.4528"
                                    y2="108.641" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_10112_2" x1="82.5276" y1="12.5" x2="92.4845"
                                    y2="15.4686" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_10112_2" x1="82.5276" y1="18.75" x2="92.4845"
                                    y2="21.7186" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_10112_2" x1="82.5276" y1="25" x2="92.4845"
                                    y2="27.9686" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint6_linear_10112_2" x1="58.611" y1="26.5625" x2="65.3498"
                                    y2="27.0648" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint7_linear_10112_2" x1="77.5552" y1="6.24999"
                                    x2="99.2178" y2="6.92986" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint8_linear_10112_2" x1="7.34634" y1="71.875" x2="66.1598"
                                    y2="86.279" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint9_linear_10112_2" x1="79.722" y1="71.875" x2="93.2361"
                                    y2="72.5945" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint10_linear_10112_2" x1="7.34634" y1="6.24999"
                                    x2="69.1841" y2="11.8296" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint11_linear_10112_2" x1="82.5268" y1="43.75" x2="93.3316"
                                    y2="44.3934" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint12_linear_10112_2" x1="33.1319" y1="43.75" x2="35.8274"
                                    y2="43.9509" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="four__subtitle">
                        Только практические
                        навыки в работе
                    </h4>
                    <p class="four__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat
                        dui. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, vel!
                    </p>
                </div>
                <div class="four__card">
                    <div class="four__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <path d="M43.75 6.25H46.875V18.75H43.75V6.25Z"
                                fill="url(#paint0_linear_10112_16)" />
                            <path d="M53.125 6.25H56.25V18.75H53.125V6.25Z"
                                fill="url(#paint1_linear_10112_16)" />
                            <path
                                d="M65.625 21.875V0H34.375V21.875H28.125V100H71.875V21.875H65.625ZM37.5 3.125H62.5V21.875H37.5V3.125ZM68.75 96.875H31.25V25H68.75V96.875Z"
                                fill="url(#paint2_linear_10112_16)" />
                            <path
                                d="M37.4998 62.2124V71.3425L48.4373 76.03V81.5376C46.2851 82.2983 44.9934 84.4994 45.3794 86.7493C45.7655 88.9999 47.7171 90.6441 49.9998 90.6441C52.2825 90.6441 54.2341 88.9999 54.6202 86.7493C55.0062 84.4994 53.7146 82.2983 51.5623 81.5376V70.2126L62.4998 60.0563V53.125H65.6248V43.75H56.2498V53.125H59.3748V58.6922L51.5623 65.9485V37.1094L54.6202 40.1672L56.8296 37.9578L49.9998 31.1279L43.17 37.9578L45.3794 40.1672L48.4373 37.1094V72.6311L40.6248 69.2825V62.2124C42.7771 61.4517 44.0687 59.2506 43.6827 57.0007C43.2966 54.7501 41.345 53.1059 39.0623 53.1059C36.7796 53.1059 34.828 54.7501 34.4419 57.0007C34.0559 59.2506 35.3476 61.4517 37.4998 62.2124ZM59.3748 46.875H62.4998V50H59.3748V46.875ZM49.9998 84.375C50.8627 84.375 51.5623 85.0746 51.5623 85.9375C51.5623 86.8004 50.8627 87.5 49.9998 87.5C49.1369 87.5 48.4373 86.8004 48.4373 85.9375C48.4373 85.0746 49.1369 84.375 49.9998 84.375ZM39.0623 56.25C39.9252 56.25 40.6248 56.9496 40.6248 57.8125C40.6248 58.6754 39.9252 59.375 39.0623 59.375C38.1994 59.375 37.4998 58.6754 37.4998 57.8125C37.4998 56.9496 38.1994 56.25 39.0623 56.25Z"
                                fill="url(#paint3_linear_10112_16)" />
                            <defs>
                                <linearGradient id="paint0_linear_10112_16" x1="44.0694" y1="6.25" x2="46.779"
                                    y2="6.30049" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_10112_16" x1="53.4444" y1="6.25" x2="56.154"
                                    y2="6.30049" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_10112_16" x1="32.5967" y1="-1.0863e-05"
                                    x2="70.5032" y2="1.23613" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_10112_16" x1="37.5682" y1="31.1279"
                                    x2="64.6322" y2="32.1872" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="four__subtitle">
                        Работа на самом современном оборудовании
                    </h4>
                    <p class="four__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat
                        dui.
                    </p>
                </div>
                <div class="four__card">
                    <div class="four__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <g clip-path="url(#clip0_10112_21)">
                                <path d="M9.375 9.375H12.5V12.5H9.375V9.375Z"
                                    fill="url(#paint0_linear_10112_21)" />
                                <path d="M9.375 15.625H12.5V18.75H9.375V15.625Z"
                                    fill="url(#paint1_linear_10112_21)" />
                                <path d="M87.5 81.25H90.625V84.375H87.5V81.25Z"
                                    fill="url(#paint2_linear_10112_21)" />
                                <path d="M87.5 87.5H90.625V90.625H87.5V87.5Z"
                                    fill="url(#paint3_linear_10112_21)" />
                                <path
                                    d="M84.375 71.875H60.9375C58.3488 71.875 56.25 73.9738 56.25 76.5625V81.25H46.875V84.375H19.5312C10.4706 84.375 3.125 77.0294 3.125 67.9688C3.125 58.9081 10.4706 51.5625 19.5312 51.5625H80.4688C91.2552 51.5625 100 42.8177 100 32.0312C100 21.2448 91.2552 12.5 80.4688 12.5H53.125V9.375H43.75V4.6875C43.75 2.09885 41.6512 0 39.0625 0H15.625V3.125H0V25H15.625V28.125H39.0625C41.6512 28.125 43.75 26.0262 43.75 23.4375V18.75H53.125V15.625H80.4688C89.5294 15.625 96.875 22.9706 96.875 32.0312C96.875 41.0919 89.5294 48.4375 80.4688 48.4375H19.5312C8.74481 48.4375 0 57.1823 0 67.9688C0 78.7552 8.74481 87.5 19.5312 87.5H46.875V90.625H56.25V95.3125C56.25 97.9012 58.3488 100 60.9375 100H84.375V96.875H100V75H84.375V71.875ZM15.625 21.875H3.125V6.25H15.625V21.875ZM40.625 9.375V23.4375C40.625 24.3004 39.9254 25 39.0625 25H18.75V3.125H39.0625C39.9254 3.125 40.625 3.82462 40.625 4.6875V9.375ZM50 15.625H43.75V12.5H50V15.625ZM56.25 87.5H50V84.375H56.25V87.5ZM81.25 96.875H60.9375C60.0746 96.875 59.375 96.1754 59.375 95.3125V76.5625C59.375 75.6996 60.0746 75 60.9375 75H81.25V96.875ZM96.875 78.125V93.75H84.375V78.125H96.875Z"
                                    fill="url(#paint4_linear_10112_21)" />
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_10112_21" x1="9.69441" y1="9.375" x2="12.3899"
                                    y2="9.57592" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_10112_21" x1="9.69441" y1="15.625"
                                    x2="12.3899" y2="15.8259" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_10112_21" x1="87.8194" y1="81.25" x2="90.5149"
                                    y2="81.4509" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_10112_21" x1="87.8194" y1="87.5" x2="90.5149"
                                    y2="87.7009" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_10112_21" x1="10.221" y1="-1.0863e-05"
                                    x2="96.4773" y2="6.42932" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#C89AFC" />
                                    <stop offset="1" stop-color="#7C6AFA" />
                                </linearGradient>
                                <clipPath id="clip0_10112_21">
                                    <rect width="100" height="100" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h4 class="four__subtitle">
                        Сертификация по окончании обучения
                    </h4>
                    <p class="four__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus eget velit quisque
                        accumsan amet tortor. Velit, volutpat egestas fringilla mi porttitor tempus. Placerat
                        dui.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="five">
        <div class="five__container">
            <div class="five__top">
                <h2 class="five__title title">
                    <span class="five__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="127" height="127" viewBox="0 0 127 127"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M84.9901 42.0097C72.9254 29.945 53.3647 29.945 41.3 42.0097L31.2177 31.9273C48.8507 14.2944 77.4394 14.2944 95.0724 31.9273C112.705 49.5603 112.705 78.149 95.0724 95.782L84.9901 85.6997C97.0547 73.635 97.0547 54.0743 84.9901 42.0097Z"
                                fill="url(#paint0_linear_10091_102)" />
                            <defs>
                                <linearGradient id="paint0_linear_10091_102" x1="70.8907" y1="7.74569"
                                    x2="117.15" y2="72.5852" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#DF5950" />
                                    <stop offset="1" stop-color="#451046" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    Партнеры - топовые бренды
                </h2>

            </div>
            <div class="five__bottom">
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
                <div class="five__logo">
                    <img loading="lazy" src="image/logomsibrand.png" alt="logo-img">
                </div>
            </div>
        </div>
    </section>
    <section class="six">
        <div class="six__box">
            <div class="six__top">
                <h2 class="six__title title">
                    <span class="six__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="127" height="127" viewBox="0 0 127 127"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M84.9901 42.0097C72.9254 29.945 53.3647 29.945 41.3 42.0097L31.2177 31.9273C48.8507 14.2944 77.4394 14.2944 95.0724 31.9273C112.705 49.5603 112.705 78.149 95.0724 95.782L84.9901 85.6997C97.0547 73.635 97.0547 54.0743 84.9901 42.0097Z"
                                fill="url(#paint0_linear_10091_102)" />
                            <defs>
                                <linearGradient id="paint0_linear_10091_102" x1="70.8907" y1="7.74569"
                                    x2="117.15" y2="72.5852" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#DF5950" />
                                    <stop offset="1" stop-color="#451046" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    Программа обучения
                </h2>
                <p class="six__subtitle">
                    Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                </p>
            </div>
            <div class="six__bottom">
                <div class="six__left">
                    <div class="six__block">
                        <p>неделя №1</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                    <div class="six__block">
                        <p>неделя №3</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                    <div class="six__block">
                        <p>неделя №5</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                    <div class="six__block">
                        <p>неделя №7</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                </div>
                <div class="six__right">
                    <div class="six__block">
                        <p>неделя №2</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                    <div class="six__block">
                        <p>неделя №4</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                    <div class="six__block">
                        <p>неделя №6</p>
                        <h6>Красивая часть курса,
                            которая помогает в успехе</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seven">
        <div class="seven__container">
            <div class="seven__top">
                <h2 class="seven__title title">
                    <span class="seven__img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="127" height="127" viewBox="0 0 127 127"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M84.9901 42.0097C72.9254 29.945 53.3647 29.945 41.3 42.0097L31.2177 31.9273C48.8507 14.2944 77.4394 14.2944 95.0724 31.9273C112.705 49.5603 112.705 78.149 95.0724 95.782L84.9901 85.6997C97.0547 73.635 97.0547 54.0743 84.9901 42.0097Z"
                                fill="url(#paint0_linear_10091_102)" />
                            <defs>
                                <linearGradient id="paint0_linear_10091_102" x1="70.8907" y1="7.74569"
                                    x2="117.15" y2="72.5852" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#DF5950" />
                                    <stop offset="1" stop-color="#451046" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    Ваши преподаватели
                </h2>

            </div>
            <div class="seven__bottom">
                <div class="seven__card">
                    <div class="seven__foto">
                        <img src="image/user1.jpg" alt="foto">
                    </div>
                    <div class="seven__name">
                        Дмитрий Иванов
                    </div>
                    <div class="seven__description">
                        Специалист по видеокартам
                    </div>
                    <a class='seven__button' href='/bio1'>Биография</a>
                </div>
                <div class="seven__card">
                    <div class="seven__foto">
                        <img src="image/user2.jpg" alt="foto">
                    </div>
                    <div class="seven__name">
                        Александр Вишневский
                    </div>
                    <div class="seven__description">
                        Бизнес-аналитик
                    </div>
                    <a class='seven__button' href='/bio2'>Биография</a>
                </div>
                <div class="seven__card">
                    <div class="seven__foto">
                        <img src="image/user3.jpg" alt="foto">
                    </div>
                    <div class="seven__name">
                        Павел Юригин
                    </div>
                    <div class="seven__description">
                        UX-UI - Дизайнер
                    </div>
                    <a class='seven__button' href='/bio3'>Биография</a>
                </div>
            </div>
        </div>
    </section>
    <section class="end" id="jj">
        <div class="end__container">
            <div class="end__box">
                <h2 class="end__title title">
                    Статьи каждую неделю
                </h2>
                <p class="end__text">
                    Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                </p>
                <form action="" class="end__form" method="">
                    <input type="email" placeholder="E-mail">
                    <button>Подписаться</button>
                </form>
            </div>
        </div>
    </section>
    <div class="stut">
        <div class="stut__body">
            <div class="stut__title">
                я тестовое окно нажмите крестик чтобы меня закрыть
            </div>
            <div class="stut__text">
                тестовое окошко выскакивает через 6 секунд после обновления страницы
            </div>
            <div class="stut__btn">
                x
            </div>
        </div>
    </div>
</main>
@endsection