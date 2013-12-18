require 'rubygems'
require 'sinatra'

get '/' do
  haml :index
end

get '/style.css' do
  sass :style
end

def partial(page, options={})
  haml page, options.merge!(:layout => false)
end

post '/sample' do
  begin

  if  params[:useHttpHandler] == 'true'
    handler = 'Handler'
  else
    handler = ''
  end

  params[:userName] == '' ? userName = "Anonymous" : userName = params[:userName]

  rescue Exception => e
    err = e.message
  end
  haml :sample, :locals => {path: params[:path], handler: handler, userName: userName, err: err}
end

get '/sample' do
  haml :sample
end