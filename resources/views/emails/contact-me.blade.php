@component('mail::message')
# A Heading

Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo hic magni nihil aut distinctio quae vitae repellat? Quae, iure obcaecati?

- List
- Goes
- Here

@component('mail::button', ['url' => 'localhost:8000/contact'])
    Visit Laravel6 
@endcomponent

@endcomponent
