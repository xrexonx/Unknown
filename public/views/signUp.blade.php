<div class="">
    <form >
        <div class="row">
            <div class="input-field col s12">
                <input id="name" type="text" class="validate" ng-model="auth.users.name">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" ng-model="auth.users.email">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" ng-model="auth.users.password">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password_confirmation" type="password" class="validate" ng-model="auth.users.password_confirmation">
                <label for="password_confirmation">Confirm Password</label>
            </div>
        </div>
        <div class="group right-align">
            <button class="btn waves-effect waves-light teal lighten-2" ng-click="auth.actions.signUp()">Sign me up!
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>