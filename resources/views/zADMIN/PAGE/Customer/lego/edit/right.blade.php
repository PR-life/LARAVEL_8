@component('_wrap.__.summary',['icoCloseName' => 'closeRoll'])
    {{-- @slot('css', '-border') --}}
    @slot('cssName', 'content-m pl-4')
    @slot('cssContent', 'space-07031144')
    @slot('id', 'wrapSize_shirt')
    @slot('name', 'Сорочка')

    <dl class="-dot Void / Form -XS / net">
        <dt class="content-xs Grey"><label for="inputSize_07031356">Обхват шеи</label></dt>
        <dd><span class="content-xs"><input id="inputSize_07031356" type="text" name="5555" value="41-42" placeholder="..."></span></dd>
        <dt class="content-xs Grey"><label for="inputSize_07031357">Обхват груди</label></dt>
        <dd><span class="content-xs"><input id="inputSize_07031357" type="text" name="5555" value="118" placeholder="..."></span></dd>
        <dt class="content-xs Grey"><label for="inputSize_07031358">Обхват талии</label></dt>
        <dd><span class="content-xs"><input id="inputSize_07031358" type="text" name="5555" value="116" placeholder="..."></span></dd>
        <dt class="content-xs Grey"><label for="inputSize_07031359">Длина по спине</label></dt>
        <dd><span class="content-xs"><input id="inputSize_07031359" type="text" name="5555" value="82" placeholder="..."></span></dd>
        <dt class="content-xs Grey"><label for="inputSize_07031360">Длина рукавов</label></dt>
        <dd><span class="content-xs"><input id="inputSize_07031360" type="text" name="5555" value="64" placeholder="..."></span></dd>
    </dl>
@endcomponent


@component('_wrap.__.summary')
    {{-- @slot('css', '') --}}
    @slot('cssName', 'content-m pl-4')
    @slot('cssContent', 'space')
    @slot('id', 'wrapSize_shoes')
    @slot('name', 'Обувь')

    <ul class="Sizes -shoes">
        <li>38</li>
        <li>39</li>
        <li>40</li>
        <li>41</li>
        <li>42</li>
        <li>43</li>
        <li class="active">44</li>
        <li>45</li>
        <li>46</li>
        <li>47</li>
        <li>48</li>
        <li>49</li>
        <li>50</li>
    </ul>
    
@endcomponent
 