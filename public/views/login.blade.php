<div class="">
    <form>

        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" ng-model="auth.email">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" ng-model="auth.password">
                <label for="password">Password</label>
            </div>
        </div>

        <div class="group right-align">
            <button class="btn waves-effect waves-light teal lighten-2" ng-click="auth.actions.login()">Log me In
                <i class="material-icons right">send</i>
            </button>
        </div>

    </form>
</div>