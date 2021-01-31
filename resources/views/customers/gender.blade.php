
@if ($customer->gender == '男')
    <label class="blue">男</label>
@endif
@if ($customer->gender == '女')
    <label class="red">女</label>
@endif
@if ($customer->gender == 'その他')
    <label>その他</label>
@endif
