<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome My Site</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolor non rerum cumque
                            perferendis aliquid minus eveniet officiis odio harum totam qui obcaecati quo beatae quasi
                            ullam in, sapiente dicta!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut eos perferendis nobis totam!
                            Illo sunt alias exercitationem cupiditate maxime earum ipsam quam id. Ut eveniet aliquam
                            amet enim exercitationem quam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>