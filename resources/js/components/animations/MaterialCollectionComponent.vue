<script>
export default {
    functional: true,
    render: function(createElement, context){
        var data={
            ...context.data,
             css: false,
            on: {
                beforeEnter: function(el){
            el.style.opacity = 0;
            el.style.transform = "scale(0)";
            el.style.transition = "all 0.2s cubic-bezier(0.4, 0.0, 0.2, 1)";
        },
        enter: function(el){
            setTimeout(()=>{
                el.style.opacity = 1;
                el.style.transform = "scale(1)";
            }, 300)
           
        },
        leave: function(el){
            el.style.opacity = 0;
            el.style.transform = "scale(0)";
        }
            }
        }
         return createElement('transition-group', data, context.children);
    }
}
</script>