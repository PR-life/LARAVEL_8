{{-- https://codepen.io/thanhrossi/pen/dVJXYz --}}
{{-- https://codepen.io/thebabydino/pen/qByGqOm --}}
{{-- https://codepen.io/Mobius1/pen/ddaBMW?editors=1010 --}}
 

<script>




    var RulersGuides = function () {
    
        
        var doc         = document.documentElement,
            body        = document.querySelector('.js-Ruler'),
            wrapper     = null,
            lockHandler = null,
            locked      = 1,
            hRuler      = null,
            vRuler      = null,
            menu        = null,
            dialogs     = [],
            snapDialog  = null,
            openGridDialog = null,
            xSnap       = 0,
            ySnap       = 0,
            mode        = 2,
            guides      = {},
            guidesCnt   = 0,
            gUid        = '',
            rulerStatus = 1,
            guideStatus = 1,
            hBound      = 0,
            vBound      = 0,
            gridList    = null,
            gridListLen = 0,
            menuBtn     = null,
            gInfoBlockWrapper = null,
            detailsStatus = 0,
            domElements = [],
            domDimensions = [],
            resizeTimer = null,
            snapDom     = 0,
            // cssText     = 'html,body{margin:0;padding:0}',
            
            
            Ruler       = function (type, size) {
                var ruler       = document.createElement('div'),
                    i           = 0,
                    span        = document.createElement('div'),
                    label       = null,
                    labelTxt    = null,
                    spanFrag    = document.createDocumentFragment(),
                    cnt         = Math.floor(size / 2);
    
                ruler.className = 'Ruler ' + type + ' unselectable';
    
                for (i; i < cnt; i = i + 1) {
                    span = span.cloneNode(false);
    
                    if (i % 25 === 0) {
                        span.className = 'milestone';
    
                        if (i > 0) {
                            label = span.cloneNode(false);
                            label.className = 'label Abs';
    
                            if (i < 50) {
                                label.className += ' l10';
                            } else if (i >= 50 && i < 500) {
                                label.className += ' l100';
                            } else if (i >= 500) {
                                label.className += ' l1000';
                            }
    
                            labelTxt = document.createTextNode(i * 2);
                            label.appendChild(labelTxt);
                            span.appendChild(label);
                        }
    
                        span.className = 'milestone';
                    } else if (i % 5 === 0) {
                        span.className = 'major';
                    } else {
                        span.className = '';
                        span.removeAttribute('class');
                    }
    
                    spanFrag.appendChild(span);
                }
    
                ruler.appendChild(spanFrag);
    
                return ruler;
            },
            
            // Menu
            // SnapDialog
    
            prepare     = function () {
                var style = document.createElement('style'),
                    size = 500,
                    elements = document.getElementsByTagName('*'),
                    len = elements.length,
                    i = 0;
    
                for (i; i < len; i = i + 1) {
                    domElements.push(elements[i]);
                }
    
                style.setAttribute('type', 'text/css');
    
                if (style.styleSheet) {
                    // style.styleSheet.cssText = cssText;
                } else {
                    // style.appendChild(document.createTextNode(cssText));
                }
    
                body.appendChild(style);
    
                setTimeout(function () {
                    // hRuler = new Ruler('h', 3000);
                    vRuler = new Ruler('-v vol-left', 1200);
    
                    wrapper = document.createElement('div');
                    gInfoBlockWrapper = wrapper.cloneNode(false);
    
                    wrapper.className = 'rg-overlay';
                    gInfoBlockWrapper.className = 'info-block-wrapper';
    
                    wrapper.style.width = (size[0]) + 'px';
                    wrapper.style.height = (size[1]) + 'px';
    
                    // wrapper.appendChild(hRuler);
                    wrapper.appendChild(vRuler);
                    wrapper.appendChild(gInfoBlockWrapper);
    
                    body.appendChild(wrapper);
    
                    // domDimensions = calculateDomDimensions();
    
                    // menu = new Menu();
                    // snapDialog = new SnapDialog();
                    // openGridDialog = new OpenGridDialog();
    
                    // dialogs = [snapDialog, openGridDialog];
                }, 10);
            };
    
        prepare();
    
    
        
        
    };
    
    
    // var evt         = new Event(),
    //     dragdrop    = new Dragdrop(evt),
    //     rg          = new RulersGuides(evt, dragdrop);
    
    let rg = new RulersGuides()
    
    </script>
    
    {{-- 
    <div class="ruler v unselectable"><span class="milestone"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l10">50</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">100</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">150</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">200</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">250</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">300</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">350</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">400</span></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="major"></span><span></span><span></span><span></span><span></span><span class="milestone"><span class="label l100">450</span></span>
    </div> --}}