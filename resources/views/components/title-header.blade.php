<style type="text/css">
    #title-header {
        background-color: var(--blue);
        color: var(--white);
    }

    @media screen and (min-width: 601px) {
        #title-header {
            font-size: 56px;
        }
    }

    @media screen and (max-width: 600px) {
        #title-header {
            font-size: 30px;
        }
    }
</style>

<div id="title-header">
    <div class="container">
        {{$title}}
    </div>
</div>
