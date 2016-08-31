<div class="box">
    <div class="box-header">
        <div class="pull-right">
            <button type="button" class="btn btn-success" title="{{ trans('servers.create') }}" data-toggle="modal" data-backdrop="static" data-target="#server"><span class="ion ion-plus"></span> {{ trans('servers.create') }}</button>
        </div>
        <h3 class="box-title">{{ trans('servers.label') }}</h3>
    </div>

    <div class="box-body" id="no_servers">
        <p>{{ trans('servers.none') }}</p>
    </div>

    <div class="box-body table-responsive" id="server_list">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ trans('servers.name') }}</th>
                    <th>{{ trans('servers.connect_as') }}</th>
                    <th>{{ trans('servers.ip_address') }}</th>
                    <th>{{ trans('servers.port') }}</th>
                    <th>{{ trans('servers.runs_code') }}</th>
                    <th>{{ trans('servers.status') }}</th>
                    <th>{{ trans('servers.updated_at') }}</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

@push('templates')
    <script type="text/template" id="server-template">
        <td data-server-id="<%- id %>"><span class="drag-handle"><i class="ion ion-ios-drag"></i></span><%- name %></td>
        <td><%- user %></td>
        <td><%- ip_address %></td>
        <td><%- port %></td>
        <td>
            <% if (deploy_code) { %>
                {{ trans('app.yes') }}
            <% } else { %>
                {{ trans('app.no') }}
            <% } %>
        </td>
        <td>
             <span class="label label-<%- status_css %>"><i class="ion ion-<%-icon_css %>"></i> <%- status %></span>
        </td>
        <td><%- updated_at %></td>
        <td>
            <div class="btn-group pull-right">
                <% if (status === 'Testing') { %>
                    <button type="button" class="btn btn-default btn-test" title="{{ trans('servers.test') }}" disabled><i class="ion ion-refresh fixhub-spin"></i></button>
                    <button type="button" class="btn btn-default btn-edit" title="{{ trans('servers.edit') }}" data-toggle="modal" data-backdrop="static" data-target="#server" disabled><i class="ion ion-compose"></i></button>
                    <button type="button" class="btn btn-danger btn-delete" title="{{ trans('servers.delete') }}" data-toggle="modal" data-backdrop="static" data-target="#server-trash" disabled><i class="ion ion-trash-a"></i></button>
                <% } else { %>
                    <button type="button" class="btn btn-default btn-test" title="{{ trans('servers.test') }}"><i class="ion ion-arrow-swap"></i></button>
                    <button type="button" class="btn btn-default btn-edit" title="{{ trans('servers.edit') }}" data-toggle="modal" data-backdrop="static" data-target="#server"><i class="ion ion-compose"></i></button>
                    <button type="button" class="btn btn-danger btn-delete" title="{{ trans('servers.delete') }}" data-toggle="modal" data-backdrop="static" data-target="#model-trash"><i class="ion ion-trash-a"></i></button>
                <% } %>
            </div>
        </td>
    </script>
@endpush